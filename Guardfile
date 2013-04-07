# A sample Guardfile
# More info at https://github.com/guard/guard#readme

# This will concatenate the javascript files specified in :files to public/js/all.js
guard :concat, type: "css", files: %w(normalize bootstrap responsive-tables main genericons style), input_dir: "css", output: "css/style-min"
guard :concat, type: "js", files: %w(plugins main), input_dir: "js", output: "js/main-min"

guard 'uglify', :destination_file => "js/main-min.js" do
  watch ('js/main-min.js')
end
