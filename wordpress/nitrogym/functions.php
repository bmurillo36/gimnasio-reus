<?php
/**
 * Tema NitroGym Reus — funciones.
 * Registra el tipo de contenido "Producto" para que desde el panel de
 * administración de WordPress se puedan crear, editar y borrar los productos
 * de la tienda: fotografía (imagen destacada), texto (contenido), precio,
 * precio anterior, categoría y etiqueta.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* Soportes básicos del tema */
add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
} );

/* Hoja de estilos del tema */
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'nitrogym', get_stylesheet_uri(), array(), '1.0.0' );
} );

/* Tipo de contenido: Producto */
add_action( 'init', function () {
	register_post_type( 'nitro_producto', array(
		'labels' => array(
			'name'               => 'Productos',
			'singular_name'      => 'Producto',
			'add_new'            => 'Añadir producto',
			'add_new_item'       => 'Añadir nuevo producto',
			'edit_item'          => 'Editar producto',
			'new_item'           => 'Nuevo producto',
			'view_item'          => 'Ver producto',
			'search_items'       => 'Buscar productos',
			'not_found'          => 'No hay productos todavía',
			'not_found_in_trash' => 'No hay productos en la papelera',
			'menu_name'          => 'Productos',
			'featured_image'     => 'Fotografía del producto',
			'set_featured_image' => 'Elegir fotografía del producto',
		),
		'public'        => true,
		'show_in_rest'  => true,
		'menu_icon'     => 'dashicons-cart',
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		'has_archive'   => false,
		'rewrite'       => array( 'slug' => 'producto' ),
	) );
} );

/* Caja de datos del producto (precio, categoría, etiqueta) */
add_action( 'add_meta_boxes', function () {
	add_meta_box( 'ng_datos', 'Datos del producto', 'ng_pintar_caja_datos', 'nitro_producto', 'side', 'high' );
} );

function ng_pintar_caja_datos( $post ) {
	wp_nonce_field( 'ng_guardar_datos', 'ng_nonce' );
	$precio    = get_post_meta( $post->ID, 'ng_precio', true );
	$anterior  = get_post_meta( $post->ID, 'ng_precio_anterior', true );
	$categoria = get_post_meta( $post->ID, 'ng_categoria', true );
	$etiqueta  = get_post_meta( $post->ID, 'ng_etiqueta', true );
	?>
	<p>
		<label for="ng_precio"><strong>Precio (€) *</strong></label><br>
		<input type="text" id="ng_precio" name="ng_precio" value="<?php echo esc_attr( $precio ); ?>" placeholder="24,90" style="width:100%">
	</p>
	<p>
		<label for="ng_precio_anterior">Precio anterior (si está de oferta)</label><br>
		<input type="text" id="ng_precio_anterior" name="ng_precio_anterior" value="<?php echo esc_attr( $anterior ); ?>" placeholder="34,90" style="width:100%">
	</p>
	<p>
		<label for="ng_categoria">Categoría</label><br>
		<input type="text" id="ng_categoria" name="ng_categoria" value="<?php echo esc_attr( $categoria ); ?>" list="ng_cats" placeholder="Suplementación" style="width:100%">
		<datalist id="ng_cats">
			<option value="Suplementación"></option>
			<option value="Equipación"></option>
			<option value="Accesorios"></option>
		</datalist>
	</p>
	<p>
		<label for="ng_etiqueta">Etiqueta destacada (opcional)</label><br>
		<input type="text" id="ng_etiqueta" name="ng_etiqueta" value="<?php echo esc_attr( $etiqueta ); ?>" placeholder="Oferta / Nuevo / Top ventas" style="width:100%">
	</p>
	<p style="color:#666">La fotografía se pone en «Imagen destacada» y el texto descriptivo en el cuadro principal.</p>
	<?php
}

add_action( 'save_post_nitro_producto', function ( $post_id ) {
	if ( ! isset( $_POST['ng_nonce'] ) || ! wp_verify_nonce( $_POST['ng_nonce'], 'ng_guardar_datos' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	foreach ( array( 'ng_precio', 'ng_precio_anterior', 'ng_categoria', 'ng_etiqueta' ) as $campo ) {
		if ( isset( $_POST[ $campo ] ) ) {
			update_post_meta( $post_id, $campo, sanitize_text_field( wp_unslash( $_POST[ $campo ] ) ) );
		}
	}
} );

/**
 * Devuelve los productos creados en el panel de WordPress con el formato
 * que espera el JavaScript de la portada. Si no hay ninguno, la web
 * muestra el catálogo de ejemplo que lleva incorporado.
 */
function ng_productos_para_js() {
	$posts = get_posts( array(
		'post_type'   => 'nitro_producto',
		'numberposts' => -1,
		'orderby'     => 'menu_order date',
		'order'       => 'ASC',
	) );
	$lista = array();
	foreach ( $posts as $p ) {
		$precio = (float) str_replace( ',', '.', get_post_meta( $p->ID, 'ng_precio', true ) );
		if ( $precio <= 0 ) {
			continue; // sin precio válido no se publica en la tienda
		}
		$anterior = (float) str_replace( ',', '.', get_post_meta( $p->ID, 'ng_precio_anterior', true ) );
		$cat      = get_post_meta( $p->ID, 'ng_categoria', true );
		$etq      = get_post_meta( $p->ID, 'ng_etiqueta', true );
		$img      = get_the_post_thumbnail_url( $p->ID, 'medium_large' );
		$item     = array(
			'id'  => 'wp' . $p->ID,
			'cat' => $cat ? $cat : 'Tienda',
			'n'   => $p->post_title,
			'd'   => wp_strip_all_tags( $p->post_content ),
			'pr'  => $precio,
			'ico' => 'bote',
		);
		if ( $anterior > 0 ) {
			$item['ant'] = $anterior;
		}
		if ( $etq ) {
			$item['etq'] = $etq;
		}
		if ( $img ) {
			$item['img'] = $img;
		}
		$lista[] = $item;
	}
	return $lista;
}
