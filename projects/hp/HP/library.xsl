<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    
    <xsl:output method="html" doctype-system="about:legacy-compat" />
    <xsl:template match="/"> 
    
    <html>
    	<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="library.css" />
        <title>Library</title>
        </head>
        <body>
        	<h1>Lab Exercise #9</h1>
            <table>
            	<thead>
                <tr>
                	<th>ID</th>
                  <th>Title</th>
                  <th>Format</th>
                  <th>Genre</th>
                </tr>
                </thead>
                
                <xsl:for-each select="/dvds/dvdId">
                <tr>
                	<td><xsl:value-of select="@id"/></td>
                	<td><xsl:value-of select="dvdTitle"/></td>
                	<td><xsl:value-of select="dvdFormat"/></td>
                	<td><xsl:value-of select="dvdGenre"/></td>
                </tr>
                </xsl:for-each>
            </table>
        </body>
    </html>
   </xsl:template>
</xsl:stylesheet>