# London Tube Status

Does it ever bother you when TfL claim to be operating a “good service” when what they really mean is just normal service? I have rectified this with a pragmatic tube status page. You can view it at unop.co.uk/tube and it has been designed with mobile browsers in mind. If the service is anything other than bog standard then it links to the detail messages on the TfL mobile site.

If you are interested in how this works, then it is actually fairly easy. The status is pulled in XML format from TfL then an XSLT is applied which transforms it into the HTML to display. There is some PHP behind the scenes which retrieves the XML from the API and applies the transform.

## Creative Commons License

This work is licensed under a Creative Commons Attribution 3.0 Unported License.