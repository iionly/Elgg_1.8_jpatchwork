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
      <!--[if !IE]> Firefox and others will use outer object -->
      <object classid="java:FrozenBubble.class"
              type="application/x-java-applet"
              archive="frozenBubble.jar"
              height="480" width="640" >
        <!-- Konqueror browser needs the following param -->
        <param name="archive" value="frozenBubble.jar" />
        <param name="codebase" value="<?php echo elgg_get_site_url() . 'mod/jpatchwork/java'; ?>" />
        <param name="offline" value="true" />
        <param name="player" value="<?php echo elgg_get_logged_in_user_entity()->name; ?>">
      <!--<![endif]-->
        <!-- MSIE (Microsoft Internet Explorer) will use inner object -->
        <object classid="clsid:8AD9C840-044E-11D1-B3E9-00805F499D93"
                height="480" width="640" >
          <param name="code" value="FrozenBubble" />
          <param name="codebase" value="<?php echo elgg_get_site_url() . 'mod/jpatchwork/java'; ?>" />
          <param name="archive" value="frozenBubble.jar" />
          <param name="offline" value="true" />
          <param name="player" value="<?php echo elgg_get_logged_in_user_entity()->name; ?>">
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

    <p>
      <hr>
      <strong>Instructions:</strong>
      <ul>
        <li>You may need to click on the applet once loaded to activate,</li>
        <li>Use LEFT/RIGHT arrow to move the launcher,</li>
        <li>Use UP arrow to fire and to start the game,</li>
        <li>M toggles colorblind mode on/off,</li>
        <li>P to pause,</li>
        <li>S toggles sound on/off.</li>
      </ul>
    </p>

</div>
