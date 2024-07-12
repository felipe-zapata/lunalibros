<style>
r { color: Red }
o { color: Orange }
g { color: Green }
</style>

# Custom Template Setup (WIP)

## TL;DR

- Install the [Advance Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/) plugin and import the [AFC data JSON file](/jender-theme/assets/acf-export.json).
- Follow the instructions for the [Home Page](#home-page) and [Content Administration](content-administration).
- Pray for everything to work.

---

1. Requirements
    - [Plugins](#plugins)
    - [Content](#content)
        - [Web Site Name](#web-site-name)
        - [Home Page](#home-page)
        - [Post Types](#post-types)
2. Content Administration
    - [Basic Pages](#basic-pages)
    - [Page Descriptions](#page-descriptions)
    - [Collections](#collections)

---

# Requirements

## Plugins

Wordpress has a variety of plugins that helps to enhance the capabilities from the site, most of them are free, but some more specialized require payments or subscriptions.

We have searched for plugins whose functionality interesect with the requirements of the site and also are simple enough to avoid overhead and future issues for the content administrators.

- [Advance Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/): Advanced Custom Fields (ACF) turns WordPress sites into a fully-fledged content management system by giving you all the tools to do more with your data. The ACF field builder allows you to quickly and easily add fields to WP edit screens with only the click of a few buttons! Whether it’s something simple like adding an “author” field to a book review post, or something more complex like the structured data needs of an ecommerce site or marketplace, ACF makes adding fields to your content model easy.

Installing a plugin on wordpress is an easy task, please follow as adviced: 

1. Navigate to Plugins: `/wp-admin/plugins.php`
2. Click on "Add New Plugin".
3. Use the search bar to find the plugin required.
4. From the search results click on "Install Now".
5. Once installed, please activate the plugin.

It's required to install and activate the required plugins for better support of the custom theme. 

## Content

It's required to have at least the whole navigation menu created as pages for the theme. Also, the post types and basic pages.

### Web Site Name

The first step is to set the Web Site Name, this is useful for Search Engine Optimization (SEO) and will present on each page title.

1. Navigate to General Settings: `/wp-admin/options-general.php`
2. Find the ***"Site Title"*** text field and include the site name.
3. Find the ***"Tagline"*** text field and include a brief description for the site.
4. Find the ***"Site Icon"*** file upload field and include a icon image for the site.
5. Optionally check the other fields and update as prefered.
6. Save Changes.

### Home Page

We'll require to create a static page as Front Page (Home), please follow as adviced:

1. Navigate to Pages: `/wp-admin/edit.php?post_type=page`
2. Publish a page with the following: 
    - Title (*Mandatory, please don't change the title*): "Inicio"
    - Simple string for subtitle (Optional, don't use blocks): ¡EGAN BERNAL Y LOS HIJOS DE LA CORDILLERA PRONTO EN LIBRERÍAS!
3. Navigate to Settings -> Reading: `/wp-admin/options-reading.php`
    - Change the **"homepage displays"** to static and set the previous page as the **"Homepage"**
4. Save changes.

The subtitle field can be updated as often as required.

### Post Types

This is the most dynamic content on the site, so requires especial attention when adding a new entry. We'll use the plugin [Advance Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/) to create the post types and configure their fields later.

1. **Collections**

- Navigate to: `/wp-admin/edit.php?post_type=acf-taxonomy`
- Click on the " + Add New" button.
- Fill the following fields (pay special attention to the letters case):
    - Post Type Key: coleccion
    - Plural Label: Colecciones
    - Singular Label: Coleccion
- Save the changes.

---

2. **Stores**

- Navigate to: `/wp-admin/edit.php?post_type=acf-post-type`
- Click on the " + Add New" button.
- Fill the following fields (pay special attention to the letters case):
    - Post Type Key: tienda
    - Plural Label: Tiendas
    - Singular Label: Tienda
- Save the changes.
- Navigate to: `/wp-admin/edit.php?post_type=acf-field-group`
- Next to the *Field Groups* title, make click on " + Add New" 
- Enter a title for the Field Group: **"Detalles de Tienda"**
- For each field required for the **Tienda post type** create as the following example (pay special attention to the letters case).

| Field Label | Field Name | Field Type | Others Details |
|---|---|---|---|
| Logo | logo | Image | Switch to the Validation tab and mark as *"Required"* && Change the **"Return Format"** to **"Image URL"** |
| URL | url | URL | |

- Scroll to the settings section and change the Rules for this field group be shown just for ***"Tienda"***.
- Save the changes and verify when adding a new **Tienda**: `/wp-admin/edit.php?post_type=libro`.

---

3. **Books**

- Navigate to: `/wp-admin/edit.php?post_type=acf-post-type`
- Click on the " + Add New" button.
- Fill the following fields (pay special attention to the letters case):
    - Post Type Key: libro
    - Plural Label: Libros
    - Singular Label: Libro
- Save the changes.
- Navigate to: `/wp-admin/edit.php?post_type=acf-field-group`
- Next to the *Field Groups* title, make click on " + Add New" 
    - Enter a title for the Field Group: **"Detalles de Libro"**
    - For each field required for the **Libro post type** create as the following example (pay special attention to the letters case).

| Field Label | Field Name | Field Type | Others Details |
|---|---|---|---|
| Colección | coleccion | Taxonomy | Select the **Taxonomy: Coleccion** && Toogle on the ***Create Terms, Save Terms and Load Terms*** options && Change the **"Return Value"** to **"Term Object"** && Set the **Appearance** to **Checkbox**. |
| Cover | cover | Image | Change the **"Return Format"** to **"Image URL"** |
| Autor | autor | Text | Switch to the Validation tab and mark as *"Required"*. |
| ISBN | isbn | Text | |
| Descripción | descripcion | Text Area | |
| Ficha Técnica | ficha_tecnica | Text Area | |
| Ubicación | ubicacion | Text | Switch to the Validation tab and mark as *"Required"*. |
| PVP | pvp | Number | |
| Compra en Linea | compra_en_linea | Relationship | Add the **Post Type "Tienda"** to the filter |
| Prensa | prensa | WYSIWYG Editor | |

- Scroll to the settings section and change the Rules for this field group be shown just for ***"Libro"***.
- Save the changes and verify when adding a new **Libro**: `/wp-admin/edit.php?post_type=libro`.

---

4. **Countries**

    - Navigate to: `/wp-admin/edit.php?post_type=acf-taxonomy`
    - Click on the " + Add New" button.
    - Fill the following fields (pay special attention to the letters case):
        - Post Type Key: pais
        - Plural Label: Paises
        - Singular Label: Pais
    - Save the changes.

---

5. **Distributors**

- Navigate to: `/wp-admin/edit.php?post_type=acf-post-type`
- Click on the " + Add New" button.
- Fill the following fields (pay special attention to the letters case):
    - Post Type Key: distribucion
    - Plural Label: Distribuciones
    - Singular Label: Distribución
- Save the changes.
- Navigate to: `/wp-admin/edit.php?post_type=acf-field-group`
- Next to the *Field Groups* title, make click on " + Add New" 
    - Enter a title for the Field Group: **"Detalles de Distribución"**
    - For each field required for the **Distribución post type** create as the following example (pay special attention to the letters case).

| Field Label | Field Name | Field Type | Others Details |
|---|---|---|---|
| País | pais | Taxonomy | Select the **Taxonomy: País** && Toogle on the ***Create Terms, Save Terms and Load Terms*** options && Change the **"Return Value"** to **"Term Object"** && Set the **Appearance** to **Select**. && Switch to the Validation tab and mark as *"Required"*. |
| Ubicación | ubicacion | Text | Switch to the Validation tab and mark as *"Required"*. |
| RRSS | rrss | Group | Change the **"Return Value"** to **"Link URL"** |
| Texto | texto | Text | <r>**This is a "RRSS" subfield** </r> |
| URL | url | URL | <r>**This is a "RRSS" subfield** </r> |
| Otro | otro | Text |  |
- Save the changes and verify when adding a new *Distribución:* `/wp-admin/edit.php?post_type=distribucion`.

- Scroll to the settings section and change the Rules for this field group be shown just for ***"Distribución"***.

---

6. **Authors**

- Navigate to: `/wp-admin/edit.php?post_type=acf-post-type`
- Click on the " + Add New" button.
- Fill the following fields (pay special attention to the letters case):
    - Post Type Key: autor
    - Plural Label: Autores
    - Singular Label: Autor
- Save the changes.
- Navigate to: `/wp-admin/edit.php?post_type=acf-field-group`
- Next to the *Field Groups* title, make click on " + Add New" 
    - Enter a title for the Field Group: **"Detalles de Autor"**
    - For each field required for the **Autor post type** create as the following example (pay special attention to the letters case).

| Field Label | Field Name | Field Type | Others Details |
|---|---|---|---|
| Descripción | descripcion | Text Area |  |
| Libro | libro | Relationship | Add the **Post Type "Libro"** to the filter |
| Foto | foto | Image | Change the **"Return Format"** to **"Image URL"** |

- Scroll to the settings section and change the Rules for this field group be shown just for ***"Autor"***.
- Save the changes and verify when adding a new *Distribución:* `/wp-admin/edit.php?post_type=distribucion`.

7. **Topics**

- Navigate to: `/wp-admin/edit.php?post_type=acf-taxonomy`
- Click on the " + Add New" button.
- Fill the following fields (pay special attention to the letters case):
    - Post Type Key: topico
    - Plural Label: Tópicos
    - Singular Label: Tópico
- Save the changes.

---

8. **Blogs**

- Navigate to: `/wp-admin/edit.php?post_type=acf-post-type`
- Click on the " + Add New" button.
- Fill the following fields (pay special attention to the letters case):
    - Post Type Key: blog
    - Plural Label: Blogs
    - Singular Label: Blog
- Save the changes.
- Navigate to: `/wp-admin/edit.php?post_type=acf-field-group`
- Next to the *Field Groups* title, make click on " + Add New" 
    - Enter a title for the Field Group: **"Detalles de Blog"**
    - For each field required for the **Blog post type** create as the following example (pay special attention to the letters case).

| Field Label | Field Name | Field Type | Others Details |
|---|---|---|---|
| Tópico | topico | Taxonomy | Select the **Taxonomy: Tópico** && Toogle on the ***Create Terms, Save Terms and Load Terms*** options && Change the **"Return Value"** to **"Term Object"** && Set the **Appearance** to **Checkbox** && Switch to the Validation tab and mark as *"Required"*. |
| Imagen | imagen | Image | Change the **"Return Format"** to **"Image URL"** |
| Descripción | descripcion | Text | |
| Texto | Text | WYSIWYG Editor | |
- Save the changes and verify when adding a new *Book:* `/wp-admin/edit.php?post_type=blog`.

- Scroll to the settings section and change the Rules for this field group be shown just for ***"Blogs"***.

---

# Content Administration

## Basic Pages

Now that the **"Home Page"** exists, we're required to create the additional pages for the theme menu. 

1. **Catalogo**
    - Navigate to Pages: `/wp-admin/edit.php?post_type=page`
    - Publish a page with the following: 
        - Title (*Mandatory, please don't change the title*): "Catalogo"
    - Save changes.
2. **Distribución**
    - Navigate to Pages: `/wp-admin/edit.php?post_type=page`
    - Publish a page with the following: 
        - Title (*Mandatory, please don't change the title*): "Distribución"
    - Save changes.
3. **Blog**
    - Navigate to Pages: `/wp-admin/edit.php?post_type=page`
    - Publish a page with the following: 
        - Title (*Mandatory, please don't change the title*): "Blog"
    - Save changes.
4. **Nosotros**
    - Navigate to Pages: `/wp-admin/edit.php?post_type=page`
    - Publish a page with the following: 
        - Title (*Mandatory, please don't change the title*): "Nosotros"
    - Save changes.

## Page Descriptions

Now that the basic pages are available, we'll require to include some description to the pages, also, there's a promotion banner and a newsletter section whose content should be dynamic.

- Navigate to the Theme's widget section: `/wp-admin/widgets.php`
- For each active Widget add a "paragraph block" **(Other types of blocks are not supported and they could impact the site performance)**
    - **Header Widget - Presentación:** *Publicamos poesía, ensayo y crónicaPublicamos poesía, ensayo y crónica*
    - **Header Widget - Anuncio:** *¡EGAN BERNAL Y LOS HIJOS DE LA CORDILLERA PRONTO EN LIBRERÍAS!*
    - **Footer Widget - Newsletter:** *Lorem ipsum dolor sit amet*
    - **Catalogo Widget:** *Construiremos un catálogo que nos permita leer América desde América y aportar conocimientos sobre el continente, publicar textos útiles para estudiantes y docentes universitarios y lectores interesados en las ciencias sociales y humanas y presentar autores y visiones que contribuyen a poner en valor la palabra, pues el gran capital común del continente americano es nuestra lengua.*
    - **Distribución Widget:** *Lorem ipsum dolor sit amet*
    - **Blog Widget:** *Gozar Leyendo es un boletín quincenal de recomendaciones de libros por parte de Darío Jaramillo Agudelo, recetas para gozar leyendo en comunidad. Lecturas Lunáticas es un boletín mensual de nuestro equipo editorial que recorre los libros de nuestro catálogo.*
    - **Nosotros Widgets:**
        - **Nosotros Title Widget:** (Use a paragraph) *Lorem ipsum dolor sit amet*
        - **Nosotros Objective Widget:** (Use a paragraph) *Construiremos un catálogo que nos permita leer América desde América y aportar conocimientos sobre el continente, publicar textos útiles para estudiantes y docentes universitarios y lectores interesados en las ciencias sociales y humanas y presentar autores y visiones que contribuyen a poner en valor la palabra, pues el gran capital común del continente americano es nuestra lengua*.
        - **Nosotros Decalogue Widget:** (Use a list) 
            - *Goza leyendo.*
            - *Es un malabarista, cuando lee tiene un pie en la tierra y otro en la luna.*
            - *Un libro lo lleva a otro libro.*
            - *Considera la lectura como un acto total.*
            - *Cuando lee por placer, no le importa aprender cosas.*
            - *Disfruta el silencio de la lectura.*
            - *Al leer se sale del tiempo y viaja estando quieto.*
            - *Está loco por la poesía, el ensayo y la narrativa.*
            - *La lectura es su ocio menos costoso.*
            - *Sabe que no todo está en los libros, pero reconoce que los libros producen cosas fuera de ellos.*
        - **Nosotros Editorial Widget:** (Use a paragraph)  *Construiremos un catálogo que nos permita leer América desde América y aportar conocimientos sobre el continente, publicar textos útiles para estudiantes y docentes universitarios y lectores interesados en las ciencias sociales y humanas y presentar autores y visiones que contribuyen a poner en valor la palabra, pues el gran capital común del continente americano es nuestra lengua*.
        - **Nosotros FAQ Widget:** (Use a list, separate the question from the answer using a pipe `|`) 
            - ¿Qué tipo de libros y autores publican? | En Luna Libros escogemos los autores de poesía, ensayo y crónica más destacados en nuestra lengua y traducimos libros del francés e inglés, principalmente de filosofía e historia. Publicamos en promedio tres títulos al año. Un Autor Lunático es un autor consagrado, con trayectoria, cuya obra es reconocida por los lectores y la crítica.
            - Tengo un manuscrito, ¿qué servicios pueden prestarme? | Cuando prestamos los servicios editoriales nos aseguramos de cuidar todo el proceso, desde la corrección hasta el diseño y la impresión, para que el cliente se encargue de la promoción y distribución del libro. Si está interesado, puede ver más información aquí.
            - ¿Dónde encuentro los libros de Luna Libros? | Nuestros libros están disponibles en formato impreso en Colombia, Argentina, Chile y México. Puede ver más información de los puntos de venta aquí. Algunos libros de nuestro catálogo también están disponibles como libro electrónico o audiolibro. En cada título aparecen los formatos. Puede ver más información aquí.
- Click "Update" and review the content.

## Collections

To create a new Book, we'll require to finish the [**"Post Types" steps for Collections and Books**](#post-types) first, when these are done, we'll require to add the collections available for the books: 

- Navigate to: `/wp-admin/edit-tags.php?taxonomy=coleccion&post_type=libro`
- Fill the "Add New Coleccion" form (pay special attention to the letters case):
    - Name: Humanidades
    - Slug; humanidades
    - Click the **"Add New Coleccion"** button.
- Add the remaining Collections (América, Creación, Pre-Textos América).

## Stores

To create a new Book, we'll require to finish the [**"Post Types" steps for Stores and Books**](#post-types) first, when these are done, we'll require to add the collections available for the books: 

- Navigate to: `/wp-admin/post-new.php?post_type=tienda`
- Create a new store which can be linked to the books.

As this will be a relationship for books, try to add all the available stores before the first book.