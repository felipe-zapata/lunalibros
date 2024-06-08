# Custom Template Setup (WIP)

1. Requirements
    - [Plugins](#plugins)
    - [Content](#content)
        - [Home Page](#home-page)
        - [Basic Pages](#)
        - [Post Types](#post-types)
2. Content Administration    
    - [Books](#books)
    - [Bulletins](#bulletins)
    - [Catalog](#catalog)
    - [Authors](#authors)
    - [Distributors](#distributors)
    - [Blog](#blog)
    - [About Us](#about-us)

---

# Requirements

## Plugins

Wordpress has a variety of plugins that helps to enhance the capabilities from the site, most of them are free, but some more specialized require payments or subscriptions.

We have searched for plugins whose functionality interesect with the requirements of the site and also are simple enough to avoid overhead and future issues for the content administrators.

- [Custom Post Type UI](https://wordpress.org/plugins/custom-post-type-ui/): Custom Post Type UI provides an easy-to-use interface for registering and managing custom post types and taxonomies for your website. Custom Post Type UI development is managed on GitHub, with official releases published on WordPress.org.

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

### Basic Pages

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


### Post Types

This is the most dynamic content on the site, so requires especial attention when adding a new entry. We'll use the plugin [Custom Post Type UI](https://wordpress.org/plugins/custom-post-type-ui/) to create the different post types and later configure them.

1. **Books**

- Navigate to: `/wp-admin/admin.php?page=cptui_manage_post_types`
- On the "Basic Settings" section, fill the following fields (pay special attention to the letters case):
    - Post Type Slug: libro
    - Plural Label: Libros
    - Singular Label: Libro
- Then click on *"Populate additional labels based on chosen labels"*
- Add the post type.
- Navigate to: `/wp-admin/edit.php?post_type=acf-field-group`
- Next to the *Field Groups* title, make click on " + Add New" 
- For each field required for the **Books post type** create as the following example (pay special attention to the letters case):
    - Field Type: Text
    - Field Label: Autor
    - Field Name: autor
    - Default Value - Leave empty.
- Repeat for all the fields required, please be aware that fields like "Portada" would require a *field type Image*, and  "Sinopsis" suits better with a *field type Text Area*.


2. **Boletines**

- Navigate to: `/wp-admin/admin.php?page=cptui_manage_post_types`
- On the "Basic Settings" section, fill the following fields (pay special attention to the letters case):
    - Post Type Slug: boletin
    - Plural Label: Boletines
    - Singular Label: Boletin
- Then click on *"Populate additional labels based on chosen labels"*
- Add the post type.

---

# Content Administration

## Books

To create a Books, we'll require to finish the [**"Post Types - Books"**](#post-types) steps first, please be sure these are complete before moving on: 

- Navigate to: `wp-admin/edit.php?post_type=libro`
- Click on "Add new"
    - Add a Title for the book. (Mandatory)
    - Add the author. (Optional)
    - Include the ISBN. (Optional)
    - Search for a 16:9 aspect-ratio front cover image. (Mandatory)
    - Add the remaining information for the fields created on [**"Post Types - Books"**](#post-types)
- Publish the book post.

Be aware that the front page will include the latest three books created on the **"Catálogo"** section.