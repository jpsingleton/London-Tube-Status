<!--

Pragmatic tube status XSLT v3

Copyright James Singleton 2012 (unop.co.uk)
Licensed under a Creative Commons Attribution 3.0 Unported License.

-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:lul="http://webservices.lul.co.uk/">
<xsl:output method="html"/>
<xsl:template match="/">
<table>
<tr>
<th>Line</th>
<th>Status</th>
</tr>
<xsl:for-each select="//lul:LineStatus">
<tr>
<td>
<xsl:attribute name="class">l<xsl:value-of select="lul:Line/@ID"/></xsl:attribute>
<xsl:value-of select="lul:Line/@Name"/>
</td>
<td>
<xsl:choose>
<xsl:when test="lul:Status/@Description = &quot;Good Service&quot;">
<xsl:attribute name="class">l9</xsl:attribute>Bog Standard Service</xsl:when>
<xsl:otherwise>
<xsl:attribute name="class">l2</xsl:attribute>
<a><xsl:attribute name="href">http://m.tfl.gov.uk/mt/www.tfl.gov.uk/tfl/livetravelnews/realtime/tube/default.html?un_jtt_v_message=<xsl:choose>
<xsl:when test="lul:Line/@ID = &quot;8&quot;">hammersmithandcity</xsl:when>
<xsl:when test="lul:Line/@ID = &quot;12&quot;">waterlooandcity</xsl:when>
<xsl:otherwise>
<xsl:value-of select="lul:Line/@Name"/>
</xsl:otherwise>
</xsl:choose>
</xsl:attribute>
<xsl:value-of select ="lul:Status/@Description"/>
</a>
</xsl:otherwise>
</xsl:choose>
</td>
</tr>
</xsl:for-each>
</table>
</xsl:template>
</xsl:stylesheet>
