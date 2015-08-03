# Tube Status

Does it ever bother you when TfL claim to be operating a `good service` when what they really mean is just normal service? I have rectified this with a pragmatic tube status page. You can view it at [unop.uk/tube](https://unop.uk/tube) and it's been designed with mobile browsers in mind (the page is kept as small as possible). If the service is anything other than bog standard then it links to the TfL responsive site.

The status is pulled in XML format from the [old TfL API](http://cloud.tfl.gov.uk/TrackerNet/LineStatus) then an XSLT is applied which transforms it into the HTML to display. There is some PHP behind the scenes which retrieves the XML from the API and applies the transform.

You'll need `php_xsl` for this to work and it's been tested on PHP 5.6. If hosting on Azure then you'll need to upload `php_xsl.dll` and add `PHP_EXTENSIONS = bin/php_xsl.dll` to the app settings.

MIT Licensed
