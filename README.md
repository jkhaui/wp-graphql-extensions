# graphql-wp-extensions. The best friend of headless WordPress CMS' and decoupled apps. 

<div align="center"><img src="https://s3.amazonaws.com/codelize/GraphPress.png" /></div></center>

<strong>First of all: the logical question to kick-off any project: <em>What</em> and <em>why</em>?</strong>
  
GraphQL provides arguably the best API architecture for highly relational datasets. The preeminent example is Facebook, who are in fact the creators of GraphQL before open-sourcing it. 
WordPress, meanwhile, is powered by over 50,000 plugins - many of which make extensive use of the WP database.
With large datasets becoming the norm for even relatively simple web apps, REST APIs become cumbersome as they were not designed to work primarily with large, nested datasets. 

Great work has been done by the contributers behind the WP GraphQL plugin. At the time of writing, however, there are virtually no repositories for plugins that help to expose other plugins to the GraphQL schema.

This repo attempts to change that.<strong>Feel free to contribute and submit any plugin extensions you may have created :)</strong>

<hr>

<em>Docs explaining how to register custom fields, CPTs, etc. to the GraphQL schema:</em>
https://www.wpgraphql.com/docs/

<hr>

<strong>Instructions for installing GraphQL add-on plugins:</strong>

1. Download the repo
2. Zip whichever folder/s you wish to use.
3. Install the Zip file as you would with any other plugin.

<em>Note that all plugins here require the WP GraphQL plugin (https://github.com/wp-graphql/wp-graphql) to be installed as a dependency (alongside the base plugin that the GraphQL helper is extending).</em>

<hr>
<strong>Constantly updated list of plugin extensions:</strong>

<em>The emphasis is on plugins that contribute large amounts of metadata to the WP database tables, primarily user_meta, post_meta and comment_meta. Primary use-cases are social-network related plugins, CPT and ACF-based plugins, as well as eCommerce plugins. Even SEO-management plugins - such as Yoast - can be effectively incorporated within the WordPress GraphQL schema.</em>

- <strong>WP User Avatar</strong>: <em>replaces default WP Gravatar system with locally hosted profile pictures.</em>
- <strong>UserPro Tags</strong>: <em>registers a custom "tags" taxonomy which allows users to describe themselves via their profiles.</em>
- <strong>UserPro Badges</strong>: <em>registers a "badges" type for users.</em>
- <strong>UserPro Bookmarks</strong>: <em>allows users to bookmark or save their favourite posts.</em>
- <strong>Everest Comment Reactions</strong>: <em>allows users to "react" to comments, Facebook-style.</em>
- <strong>Comment Sentiment</strong>: <em>uses a Naive Bayes classifier to automatically classify comments as "positive", "neutral", or "negative".</em>
