###
# Compass
###

# Change Compass configuration
# compass_config do |config|
#   config.output_style = :compact
# end

###
# Page options, layouts, aliases and proxies
###

# Per-page layout changes:
#
# With no layout
# page "/path/to/file.html", :layout => false
#
# With alternative layout
# page "/path/to/file.html", :layout => :otherlayout
#
# A path which all have the same layout
# with_layout :admin do
#   page "/admin/*"
# end

# Proxy pages (http://middlemanapp.com/basics/dynamic-pages/)
# proxy "/this-page-has-no-template.html", "/template-file.html", :locals => {
#  :which_fake_page => "Rendering a fake page with a local variable" }

###
# Helpers
###

# Automatic image dimensions on image_tag helper
activate :automatic_image_sizes

# Reload the browser automatically whenever files change
activate :livereload
activate :directory_indexes

# Methods defined in the helpers block are available in templates
# helpers do
#   def some_helper
#     "Helping"
#   end
# end

set :css_dir, 'css'
set :sass_dir, 'css'
set :js_dir, 'js'
set :images_dir, 'img'

configure :development do
  set :env, 'development'
  set :use_ga, false
  compass_config do |config|
    config.sass_options = {:debug_info => true}
  end
end

configure :build do
  set :env, 'build'
  set :use_ga, true

  # Ignore most JS files
  # ignore 'js/mg7.js'
  # ignore 'js/package.json'
  # ignore 'js/Gruntfile.js'
  # ignore 'js/application*.js'
  # ignore 'js/templates*'
  # ignore 'js/lib/*'
  # ignore 'js/anim.js'
  # ignore 'js/anim/*'
  # ignore 'js/node_modules/*'

  # Ignore Compass files
  # ignore 'css/*.scss'
  ignore 'css/lib/*'

  # For example, change the Compass output style for deployment
  activate :minify_css

  # Minify Javascript on build
  # activate :minify_javascript

  # Enable cache buster
  # activate :asset_hash

  # Use relative URLs
  # activate :relative_assets

  # Or use a different image path
  # set :http_prefix, "/Content/images/"
end
