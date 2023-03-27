<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <html lang="en">
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
      <link rel="stylesheet" href="/bit2022/lib_css/style.css"/>
      <title><xsl:value-of select="course/info/title"/></title>
    </head>
    <body>
      <!--week 1-->
      <div id='main'>
        <nav>
        </nav>

        <article><i class="material-icons md-100">computer</i></article>

        <aside>
          <h2><xsl:value-of select="course/info/title"/></h2>
          <h3>Lesson #</h3>
          <xsl:apply-templates select="course/lessons"/>
        </aside>
      </div>

      <!--week 1-->
      <div id='main'>
        <nav>
        </nav>
        <article><i class="material-icons md-100">code</i></article>

        <aside>
          <h2>Lab Works</h2>
          <h3>Lab Files</h3>
          <xsl:apply-templates select="course/labs"/>
          <!-- <ol>
            <li>Tekzenit.com</li>
            <li>Content Inventory</li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference" target="_blank">CSS reference</a>
            </li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element" target="_blank">HTML 5 reference</a>
            </li>

          </ol> -->
        </aside>
      </div>
      <!--week 2-->
 

    </body>

    </html>
  </xsl:template>

  <xsl:template match="labs">
    <table>
      <tr> 
        <th>S.No.</th> 
        <th>Number</th> 
        <th>Title</th>
        <th>Objectives</th>
        <th>Lab File</th>
      </tr>
      <xsl:for-each select=".">
          <xsl:apply-templates select="lab">
            <xsl:with-param name="sn" ><xsl:value-of select="position()"/></xsl:with-param>
          </xsl:apply-templates>
      </xsl:for-each>
    </table>

  </xsl:template>

  <xsl:template match="lab" name="lab">
    <tr>
    <td><xsl:value-of select="sn"/></td>
    <td><xsl:value-of select="number" /></td>
    <td><xsl:value-of select="title" /></td>
    <td>
      <xsl:for-each select="objectives">
        <li><xsl:value-of select="."/></li>
      </xsl:for-each>
      
    </td>
    <td>
    <ol><xsl:for-each select="files">
        <li><a href="{file}">Assignment <xsl:value-of select="../number" /> </a></li>
      </xsl:for-each>
    </ol>
    </td>
    </tr>
  </xsl:template>

  <xsl:template match="lessons">
    <ol>
      <xsl:for-each select="lesson">
        <li> <xsl:value-of select="title"/></li>
        <ol>
          <table>
            <tr>
              <th>S.No.</th>
              <th>Resource File</th>
              <th>Tags</th>
            </tr>
            
              <xsl:for-each select="resources/a">
                <tr>
                  <td><xsl:value-of select="position()"/></td>
                  <td><a href="{@href}"><xsl:value-of select="."></xsl:value-of></a></td>
                  <td><xsl:value-of select="@tags"></xsl:value-of></td>
                </tr>
              </xsl:for-each>
            
          </table>
        </ol>
      </xsl:for-each>
    </ol>
  </xsl:template>

</xsl:stylesheet>