<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <html>
      <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
      </head>
      <body>
        <h1>Netflix Content</h1>
        <table>
          <tr>
            <th>Movie Name</th>
            <th>Movie Director</th>
          </tr>
          <xsl:apply-templates select="netflix/movies/action_movies/movie_details"/>
        </table>
        <table>
          <tr>
            <th>Show Name</th>
            <th>Show Release Date</th>
          </tr>
          <xsl:apply-templates select="netflix/tv-shows/tv_shows/show_description"/>
        </table>
      </body>
    </html>
  </xsl:template>

  <xsl:template match="movie_details">
    <tr>
      <td><xsl:value-of select="name"/></td>
      <td><xsl:value-of select="director"/></td>
    </tr>
  </xsl:template>

  <xsl:template match="show_description">
    <tr>
      <td><xsl:value-of select="show_name"/></td>
      <td><xsl:value-of select="show_release"/></td>
    </tr>
  </xsl:template>
</xsl:stylesheet>
