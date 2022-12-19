<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
  <h2>Questions List</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th style="text-align:left">Q.No.</th>
      <th style="text-align:left">Description</th>
    </tr>
    <xsl:apply-templates/>
  </table>
</body>
</html>
</xsl:template>

<xsl:template match="question">
  <tr>
    <th colspan="2"><xsl:value-of select="desc"/></th>
  </tr>
  <ol>
  <xsl:apply-templates select="sub_questions"/>
  </ol>
</xsl:template>

<xsl:template match="sub_questions">
  <xsl:for-each select="li">
  <tr>
    <td><li></li></td>
    <td><xsl:value-of select="."/></td>
  </tr>
</xsl:for-each>
</xsl:template>

</xsl:stylesheet>
