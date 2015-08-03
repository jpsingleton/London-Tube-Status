# Tube Status

Does it ever bother you when TfL claim to be operating a `good service` when what they mean is just normal service? I have rectified this with a pragmatic tube status page. You can view it at [unop.uk/tube](https://unop.uk/tube). It's designed with mobile browsers in mind (the page is as small as possible). If the service is anything other than bog standard then it links to the TfL responsive site.

The status comes in XML format from the [old TfL API](http://cloud.tfl.gov.uk/TrackerNet/LineStatus). Then [an XSLT](main.xsl) transforms it into the HTML to display. There is [some PHP](index.php) behind the scenes which retrieves the XML from the API and applies the transform.

You can add it to the home screen of your smart phone for easy access. It has some high resolution [icons](icons) for iOS and Android.

![Icon](icons/android-icon-192x192.png)

You'll need `php_xsl` for this to work and it's tested on PHP 5.6. If hosting on Azure then you'll need to upload `php_xsl.dll`. Then add `PHP_EXTENSIONS = bin/php_xsl.dll` to the app settings.

MIT Licensed
