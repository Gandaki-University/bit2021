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

<xsl:template match="questions">
  <xsl:for-each select=".">
    <tr>
      <th><xsl:value-of select="position()"/>.</th>
      <xsl:apply-templates/>
    </tr>
  </xsl:for-each>
</xsl:template>

<xsl:template match="question" name="question">
  <td>
    <xsl:value-of select="desc"/>
    <xsl:apply-templates select="sub_questions"/>
  </td>
  <!-- <td><xsl:value-of select="submission/deadline"></td> -->
</xsl:template>

<xsl:template match="sub_questions">
<ol>
  <xsl:for-each select="li">
    <!-- <tr>
      <td><xsl:value-of select="position()"/>.</td>
      <td><xsl:value-of select="."/></td>
    </tr> -->
    <li><xsl:value-of select="."/></li>
  </xsl:for-each>
</ol>
</xsl:template>

</xsl:stylesheet>
