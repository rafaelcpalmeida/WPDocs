# WPDocs

WPDocs is a free and open source WordPress theme for your project documentation.

![alt text](https://raw.githubusercontent.com/rafaelcpalmeida/WPDoc/master/screenshot.png "WPDocs")

### Version
1.0.0

### Tech

WPDocs is based on [daux.io] and on [_s] but it was stripped down and personalized as I saw it looked better, altough I'm using their css theme files as base, I've created a CSS file with my custom styling.

In order to stylize the code I'm using [prism.js], you can check the languages they support in their page.

### Installation

Just install a fresh copy of WordPress, WPDocs and you're ready to use it.

#### Instructions

- Move WPDocs folder to WordPress themes folder
- Activate WPDocs
- Go to your pages and 
    - Create a new page and choose the "WPDocs Frontpage" template
    - Or edit an existing one and choose the "WPDocs Frontpage" template
- Go to Personalize -> Homepage -> Change homepage to a static page and chose the page you've changed in the step above
- Go to Personalize -> Menus and create a menu to be shown in the bottom of the Homepage and antoher one to be shown on the left side bar on the theme's inner pages
- Create a new page and style the code using &lt;pre&gt; and &lt;code&gt; tags, for PHP. You can use any language that prism supports.
```
<pre><code class="language-php">
    echo "Hello World\n";
</code></pre>
```

Or

```
<pre><code class="language-javascript">
    console.log("Hello World\n");
</code></pre>
```

### Development

Want to contribute? Great!

If you made changes to the theme base just make a pull request.

License
----

MIT


**Free Software, Hell Yeah!**

**Made with ♥ in Portugal**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)


   [daux.io]: <http://daux.io/>
   [_s]: <http://underscores.me/>
   [prism.js]: http://prismjs.com/
