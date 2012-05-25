<?php

/**
 * This is a proof-of-concept implementation of embedding Java applets in Elgg.
 * It includes a sample applet and game.
 * (C) iionly 2012
 * GNU General Public License version 2
 */

?>

<div>

    <p>
      This Java applet uses the Java Plug-in supplied by Sun. According to its developer Shayne Steele it has been tested and shown to work with the following browsers:
      <br />
      Microsoft Internet Explorer, Firefox, Mozilla, Camino, Netscape, Safari, Konqueror, and Opera.
      <br /><br />
      Sample.jar licensed under the LGPLv3.
      (C) 2011 Shayne Steele
    </p>

    <p>
      <strong>NOTE:</strong> Need Java 1.4 (or later version) Plug-in to run this applet, so if it does not work,
      <a href="http://java.com">
        get the latest Java Plug-in here.
      </a>
    </p>

    <p>
      <!--[if !IE]> Firefox and others will use outer object -->
      <object classid="java:Sample2.class"
              type="application/x-java-applet"
              archive="sample.jar"
              height="300" width="550" >
        <!-- Konqueror browser needs the following param -->
        <param name="archive" value="sample.jar" />
        <param name="codebase" value="<?php echo elgg_get_site_url() . 'mod/jpatchwork/java'; ?>" />
      <!--<![endif]-->
        <!-- MSIE (Microsoft Internet Explorer) will use inner object -->
        <object classid="clsid:8AD9C840-044E-11D1-B3E9-00805F499D93"
                height="300" width="550" >
          <param name="code" value="Sample2" />
          <param name="codebase" value="<?php echo elgg_get_site_url() . 'mod/jpatchwork/java'; ?>" />
          <param name="archive" value="sample.jar" />
          <strong>
            This browser does not have a Java Plug-in.
            <br />

            <a href="http://java.com">
              Get the latest Java Plug-in here.
            </a>
          </strong>
        </object>
      <!--[if !IE]> close outer object -->
      </object>
      <!--<![endif]-->
    </p>

</div>
