<!--
Pragmatic tube status XSLT v4
James Singleton 2015 (unop.uk)
Licensed under the MIT License
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
<a><xsl:attribute name="href">https://tfl.gov.uk/tube-dlr-overground/status</xsl:attribute>
<xsl:value-of select="lul:Status/@Description"/>
</a>
</xsl:otherwise>
</xsl:choose>
</td>
</tr>
</xsl:for-each>
</table>
</xsl:template>
</xsl:stylesheet>