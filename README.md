# graphql-extensions

<div align="center"><img src="https://s3.amazonaws.com/codelize/GraphPress.png" /></div></center>

<strong>GraphQL provides arguably the best API architecture for highly relational datasets.</strong> WordPress, meanwhile, is powered by over 50,000 plugins - many of which make extensive use of the WP database.

Some great work has been done by the contributers to the WP GraphQL plugin. However, at the time of writing, there are virtually no repositories for plugins that help to expose other plugins to the GraphQL schema.

<strong>This repo attempts to change that. Feel free to submit any extenders you may have created :)</strong>

<hr>

Docs explaining how to register custom fields, CPTs, etc. to the GraphQL schema:
https://www.wpgraphql.com/docs/

<hr>

<strong>Instructions for installing GraphQL add-on plugins:</strong>

1. Download the repo
2. Zip whichever folder/s you wish to use.
3. Install the Zip file as you would with any other plugin.

<em>Note that all plugins here require the WP GraphQL plugin (https://github.com/wp-graphql/wp-graphql) to be installed as a dependency.</em>

<hr>
<strong>Constantly updated list of plugin extensions:</strong>

<em>As one might expect, the emphasis is on plugins that contribute large amounts of metadata to the WP database tables. Examples include social-network related plugins, CPT and ACF-based plugins, as well as eCommerce plugins.</em>

- WP User Avatar (replaces default WP Gravatar system with locally hosted profile pictures).
- UserPro Tags (registers a custom "tags" taxonomy which allows users to describe themselves via their profiles).
- UserPro Badges (registers a "badges" type for users).
- UserPro Bookmarks (allows users to bookmark or save their favourite posts).
- Everest Comment Reactions (allows users to "react" to comments, Facebook-style).
- Comment Sentiment (uses a Naive Bayes classifier to automatically classify comments as "positive", "neutral", or "negative".
