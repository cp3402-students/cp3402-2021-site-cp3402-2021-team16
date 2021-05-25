# Development and Deployment Workflow

## Project Management

### Amazon Web Services (AWS)

AWS was used to create a live version of the website. This was used as the main site. The live site's theme were exported and imported into everyone's local environments first. This local environment was connected to github which then allowed everyone to view and edit the site however they wanted to without affecting the live site. The live site also allowed everyone to edit the contents together at the same time.

Link to AWS live site: <https://ec2-3-16-46-160.us-east-2.compute.amazonaws.com>

### Github

Github was used to keep track of everyone's work and maintain it in one location for the final production. This github repository shared only the 'public' folder contents.

Link to Github Repo: <https://github.com/cp3402-students/cp3402-2021-site-cp3402-2021-team16>

### Trello

The development and deployment was tracked using Trello Boards.Trello helped in the planning before, and during the creation of the website to maintain efficient workflow. Each group member was assigned a job using Trello either alone, or together, and later reviewed by everyone else to make sure everything was up to everyone's standard.

Trello board link: <https://trello.com/b/Cy0rVmFi/cp3402-team16>

## Deployment

### Local Environment

Using the default WPDistillery from <https://github.com/lindsaymarkward/WPDistillery>, a local environment was created with vagrant. This local environment was copied to a github repo; <https://github.com/jc463628/Default-Local-Host>, to allow everyone to have the same starting files in case anyone had problems with their local host. The main github repo (cp3402-2021-site-cp3402-2021-team16) was cloned into this local host directory with the folder named 'public'.

To setup your own local host:

1. Clone the Default-Local-Host into any project folder you want.
2. Clone the main github 'public' folder repo inside the Default-Local-Host into a folder called 'public'.
3. Run 'vagrant up' command.
4. Once site is set up, export content from live site using the Wordpress default export tool.
5. Import files into the local host through wp-admin.

## Editing the theme

The theme was edited through the WordPress live site by the contributers. Wordpress has it's own theme editor implanted in their system which allowed the changing of the theme.css through the live website.

To edit the theme:

1. Login to live website wp-admin by typing /wp-admin at the end of the site.
2. Go to; Appearance --> Theme Editor.
3. Under "Theme Files", go to; css/theme.css.

## Commiting to main Github repo

To commit changes to the github repo, the live site was to be exported to access the theme.css folder. This was done using a wordpress plugin called 'WP Clone'. This plugin allowed the files to be exported as the normal built in export did not allow access to the theme folder. The new theme file was finally uploaded to github and updated, overwriting the old theme folder.

