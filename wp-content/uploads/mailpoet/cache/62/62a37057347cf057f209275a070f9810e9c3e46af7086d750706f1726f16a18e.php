<?php

/* settings/basics.html */
class __TwigTemplate_9aeca1a6cb02b4735c1ed62586ef683bb1484a04a6db7b9b68cd5f60e82c1f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table class=\"form-table\">
  <tbody>
    ";
        // line 3
        echo do_action("mailpoet_settings_basics_before");
        echo "
    <tr>
      <th scope=\"row\">
        <label for=\"settings[from_name]\">
          ";
        // line 7
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Default sender");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 10
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("These email addresses will be selected by default for each new email.");
        echo "
        </p>
      </th>
      <td>
        <!-- default from name & email -->
        <p>
          <label for=\"settings[from_name]\">";
        // line 16
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("From");
        echo "</label>
          <input type=\"text\"
            id=\"settings[from_name]\"
            name=\"sender[name]\"
            value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sender", array()), "name", array()), "html", null, true);
        echo "\"
            placeholder=\"";
        // line 21
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your name");
        echo "\" />
          <input type=\"email\"
            id=\"settings[from_email]\"
            name=\"sender[address]\"
            value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sender", array()), "address", array()), "html", null, true);
        echo "\"
            placeholder=\"from@mydomain.com\" />
        </p>
        <!-- default reply_to name & email -->
        <p>
          <label for=\"settings[reply_name]\">";
        // line 30
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Reply-to");
        echo "</label>
          <input type=\"text\"
            id=\"settings[reply_name]\"
            name=\"reply_to[name]\"
            value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "reply_to", array()), "name", array()), "html", null, true);
        echo "\"
            placeholder=\"";
        // line 35
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your name");
        echo "\" />
          <input type=\"email\"
            id=\"settings[reply_email]\"
            name=\"reply_to[address]\"
            value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "reply_to", array()), "address", array()), "html", null, true);
        echo "\"
            placeholder=\"reply_to@mydomain.com\" />
        </p>
      </td>
    </tr>
    <!-- email addresses receiving notifications -->
    <tr style=\"display:none\">
      <th scope=\"row\">
        <label for=\"settings[notification_email]\">
          ";
        // line 48
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email notifications");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 51
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("These email addresses will receive notifications (separate each address with a comma).");
        echo "
        </p>
      </th>
      <td>
        <p>
          <input type=\"text\"
            id=\"settings[notification_email]\"
            name=\"notification[address]\"
            value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "notification", array()), "address", array()), "html", null, true);
        echo "\"
            placeholder=\"notification@mydomain.com\"
            class=\"regular-text\" />
        </p>
        <p>
          <label for=\"settings[notification_on_subscribe]\">
            <input type=\"checkbox\" id=\"settings[notification_on_subscribe]\"
            name=\"notification[on_subscribe]\"
            value=\"1\"
            ";
        // line 68
        if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "notification", array()), "on_subscribe", array())) {
            echo "checked=\"checked\"";
        }
        echo " />
            ";
        // line 69
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("When someone subscribes");
        echo "
          </label>
        </p>
        <p>
          <label for=\"settings[notification_on_unsubscribe]\">
            <input type=\"checkbox\"
            id=\"settings[notification_on_unsubscribe]\"
            name=\"notification[on_unsubscribe]\"
            value=\"1\"
            ";
        // line 78
        if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "notification", array()), "on_unsubscribe", array())) {
            echo "checked=\"checked\"";
        }
        echo " />
            ";
        // line 79
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("When someone unsubscribes");
        echo "
          </label>
        </p>
      </td>
    </tr>
    <!-- ability to subscribe in comments -->
    <!-- TODO: Check if registration is enabled (if not, display a message and disable setting) -->
    <tr>
      <th scope=\"row\">
        <label for=\"settings[subscribe_on_comment]\">
          ";
        // line 89
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribe in comments");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 92
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Visitors that comment on a post can subscribe to your list via a checkbox.");
        echo "
        </p>
      </th>
      <td>
        <p>
          <input
            data-toggle=\"mailpoet_subscribe_on_comment\"
            type=\"checkbox\"
            value=\"1\"
            id=\"settings[subscribe_on_comment]\"
            name=\"subscribe[on_comment][enabled]\"
            ";
        // line 103
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscribe", array()), "on_comment", array()), "enabled", array())) {
            echo "checked=\"checked\"";
        }
        // line 104
        echo "          />
        </p>
        <div id=\"mailpoet_subscribe_on_comment\">
          <p>
            <input
              type=\"text\"
              id=\"settings[subscribe_on_comment_label]\"
              name=\"subscribe[on_comment][label]\"
              class=\"regular-text\"
              ";
        // line 113
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscribe", array()), "on_comment", array()), "label", array())) {
            // line 114
            echo "                  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscribe", array()), "on_comment", array()), "label", array()), "html", null, true);
            echo "\"
              ";
        } else {
            // line 116
            echo "                value=\"";
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes, add me to your mailing list");
            echo "\"
              ";
        }
        // line 118
        echo "            />
          </p>
          <p>
            <label>";
        // line 121
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Users will be subscribed to these lists:");
        echo "</label>
          </p>
          <p>
            <select
              id=\"mailpoet_subscribe_on_comment_segments\"
              name=\"subscribe[on_comment][segments][]\"
              data-placeholder=\"";
        // line 127
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Choose a list");
        echo "\"
              multiple
            >
              ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["segments"]) ? $context["segments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 131
            echo "                <option
                  value=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "id", array()), "html", null, true);
            echo "\"
                  ";
            // line 133
            if (twig_in_filter($this->getAttribute($context["segment"], "id", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscribe", array()), "on_comment", array()), "segments", array()))) {
                // line 134
                echo "                    selected=\"selected\"
                  ";
            }
            // line 136
            echo "                >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "subscribers", array()), "html", null, true);
            echo ")</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "            </select>
          </p>
        </div>
      </td>
    </tr>
    <!-- ability to subscribe when registering -->
    <!-- TODO: Only available for the main site of a multisite! -->
    <!-- TODO: Check if registration is enabled (if not, display a message and disable setting) -->
    <tr>
      <th scope=\"row\">
        <label for=\"settings[subscribe_on_register]\">
          ";
        // line 149
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribe in registration form");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 152
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Allow users who register as a WordPress user on your website to subscribe to a MailPoet list (in addition to the \"WordPress Users\" list).");
        echo "
        </p>
      </th>
      <td>
        ";
        // line 156
        if (($this->getAttribute((isset($context["flags"]) ? $context["flags"] : null), "registration_enabled", array()) == true)) {
            // line 157
            echo "          <p>
            <input
              data-toggle=\"mailpoet_subscribe_in_form\"
              type=\"checkbox\"
              value=\"1\"
              id=\"settings[subscribe_on_register]\"
              name=\"subscribe[on_register][enabled]\"
              ";
            // line 164
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscribe", array()), "on_register", array()), "enabled", array())) {
                // line 165
                echo "                checked=\"checked\"
              ";
            }
            // line 167
            echo "            />
          </p>

          <div id=\"mailpoet_subscribe_in_form\">
            <p>
              <input
                type=\"text\"
                id=\"settings[subscribe_on_register_label]\"
                name=\"subscribe[on_register][label]\"
                class=\"regular-text\"
                ";
            // line 177
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscribe", array()), "on_register", array()), "label", array())) {
                // line 178
                echo "                  value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscribe", array()), "on_register", array()), "label", array()), "html", null, true);
                echo "\"
                ";
            } else {
                // line 180
                echo "                  value=\"";
                echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes, add me to your mailing list");
                echo "\"
                ";
            }
            // line 182
            echo "              />
            </p>
            <p>
              <label>";
            // line 185
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Users will be subscribed to these lists:");
            echo "</label>
            </p>
            <p>
              <select
                id=\"mailpoet_subscribe_on_register_segments\"
                name=\"subscribe[on_register][segments][]\"
                data-placeholder=\"";
            // line 191
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Choose a list");
            echo "\"
                multiple
              >
                ";
            // line 194
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["segments"]) ? $context["segments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
                // line 195
                echo "                  <option
                    value=\"";
                // line 196
                echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "id", array()), "html", null, true);
                echo "\"
                    ";
                // line 197
                if (twig_in_filter($this->getAttribute($context["segment"], "id", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscribe", array()), "on_register", array()), "segments", array()))) {
                    // line 198
                    echo "                      selected=\"selected\"
                    ";
                }
                // line 200
                echo "                  >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "name", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "subscribers", array()), "html", null, true);
                echo ")</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "              </select>
            </p>
          </div>
        ";
        } else {
            // line 206
            echo "          <p>
            <em>";
            // line 207
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Registration is disabled on this site.");
            echo "</em>
          </p>
        ";
        }
        // line 210
        echo "      </td>
    </tr>
    <!-- edit subscription-->
    <tr>
      <th scope=\"row\">
        <label for=\"subscription_manage_page\">
          ";
        // line 216
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manage Subscription page");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 219
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("When your subscribers click the \"Manage your subscription\" link, they will be directed to this page.");
        echo "
          <br />
          ";
        // line 221
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("If you want to use a custom Subscription page, simply paste this shortcode on to a WordPress page: [mailpoet_manage_subscription]");
        echo "
        </p>
      </th>
      <td>
        <p>
          <select
            class=\"mailpoet_page_selection\"
            id=\"subscription_manage_page\"
            name=\"subscription[pages][manage]\"
          >
            ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 232
            echo "              <option
                value=\"";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\"
                data-preview-url=\"";
            // line 234
            echo $this->getAttribute($this->getAttribute($context["page"], "url", array()), "manage", array());
            echo "\"
                ";
            // line 235
            if (($this->getAttribute($context["page"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscription", array()), "pages", array()), "manage", array()))) {
                // line 236
                echo "                  selected=\"selected\"
                ";
            }
            // line 238
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "          </select>
          <a
            class=\"mailpoet_page_preview\"
            href=\"javascript:;\"
            title=\"";
        // line 244
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview page");
        echo "\"
          >";
        // line 245
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview");
        echo "</a>
        </p>
        <p>
          <label>";
        // line 248
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribers can choose from these lists:");
        echo "</label>
        </p>
        <p>
          <select
            id=\"mailpoet_subscription_edit_segments\"
            name=\"subscription[segments][]\"
            data-placeholder=\"";
        // line 254
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave this field empty to display all lists");
        echo "\"
            multiple
          >
            ";
        // line 257
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["segments"]) ? $context["segments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 258
            echo "              <option
                value=\"";
            // line 259
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "id", array()), "html", null, true);
            echo "\"
                ";
            // line 260
            if (twig_in_filter($this->getAttribute($context["segment"], "id", array()), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscription", array()), "segments", array()))) {
                // line 261
                echo "                  selected=\"selected\"
                ";
            }
            // line 263
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "subscribers", array()), "html", null, true);
            echo ")</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "          </select>
        </p>
      </td>
    </tr>
    <!-- unsubscribe-->
    <tr>
      <th scope=\"row\">
        <label for=\"subscription_unsubscribe_page\">
          ";
        // line 273
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unsubscribe page");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 276
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("When your subscribers click the \"Unsubscribe\" link, they will be directed to this page.");
        echo "
          <br />
          ";
        // line 278
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("If you want to use a custom Unsubscribe page, simply paste this shortcode on to a WordPress page: [mailpoet_manage text=\"Manage your subscription\"]");
        echo "
        </p>
      </th>
      <td>
        <p>
          <select
            class=\"mailpoet_page_selection\"
            id=\"subscription_unsubscribe_page\"
            name=\"subscription[pages][unsubscribe]\"
          >
            ";
        // line 288
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 289
            echo "              <option
                value=\"";
            // line 290
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\"
                data-preview-url=\"";
            // line 291
            echo $this->getAttribute($this->getAttribute($context["page"], "url", array()), "unsubscribe", array());
            echo "\"
                ";
            // line 292
            if (($this->getAttribute($context["page"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscription", array()), "pages", array()), "unsubscribe", array()))) {
                // line 293
                echo "                  selected=\"selected\"
                ";
            }
            // line 295
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        echo "          </select>
          <a
            class=\"mailpoet_page_preview\"
            href=\"javascript:;\"
            title=\"";
        // line 301
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview page");
        echo "\"
          >";
        // line 302
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview");
        echo "</a>
        </p>
      </td>
    </tr>
    <!-- shortcode: archive page  -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 310
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Archive page shortcode");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 313
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Paste this shortcode on a page to display a list of past newsletters.");
        echo "
        </p>
      </th>
      <td>
        <p>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"mailpoet_shortcode_archives\"
            value=\"[mailpoet_archive]\"
            onClick=\"this.focus();this.select();\"
            readonly=\"readonly\"
          />
        </p>
        <p>
          <select
            id=\"mailpoet_shortcode_archives_list\"
            data-shortcode=\"mailpoet_archive\"
            data-output=\"mailpoet_shortcode_archives\"
            data-placeholder=\"";
        // line 332
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave this field empty to display all lists");
        echo "\"
            multiple
          >
            ";
        // line 335
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["segments"]) ? $context["segments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 336
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "subscribers", array()), "html", null, true);
            echo ")</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        echo "          </select>
        </p>
      </td>
    </tr>
    <!-- shortcode: total number of subscribers -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 346
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Shortcode to display total number of subscribers");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 349
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Paste this shortcode on a post or page to display the total number of confirmed subscribers.");
        echo "
        </p>
      </th>
      <td>
        <p>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"mailpoet_shortcode_subscribers\"
            value=\"[mailpoet_subscribers_count]\"
            onClick=\"this.focus();this.select();\"
            readonly=\"readonly\"
          />
        </p>
        <p>
          <select
            id=\"mailpoet_shortcode_subscribers_count\"
            data-shortcode=\"mailpoet_subscribers_count\"
            data-output=\"mailpoet_shortcode_subscribers\"
            data-placeholder=\"";
        // line 368
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave this field empty to display all lists");
        echo "\"
            multiple
          >
            ";
        // line 371
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["segments"]) ? $context["segments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 372
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "subscribers", array()), "html", null, true);
            echo ")</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 374
        echo "          </select>
        </p>
      </td>
    </tr>
  </tbody>
</table>

<script type=\"text/javascript\">
  jQuery(function(\$) {
    // on dom loaded
    \$(function() {
      // select2 instances
      \$('#mailpoet_subscribe_on_comment_segments').select2();
      \$('#mailpoet_subscribe_on_register_segments').select2();
      \$('#mailpoet_subscription_edit_segments').select2();
      \$('#mailpoet_shortcode_archives_list').select2();
      \$('#mailpoet_shortcode_subscribers_count').select2();

      // shortcodes
      \$('#mailpoet_shortcode_archives_list, #mailpoet_shortcode_subscribers_count')
      .on('change', function() {
        var shortcode = \$(this).data('shortcode'),
          values = \$(this).val() || [];

        if (values.length > 0) {
          shortcode += ' segments=\"';
          shortcode += values.join(',');
          shortcode += '\"';
        }

        \$('#' + \$(this).data('output'))
          .val('[' + shortcode + ']');
      });
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "settings/basics.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  714 => 374,  701 => 372,  697 => 371,  691 => 368,  669 => 349,  663 => 346,  653 => 338,  640 => 336,  636 => 335,  630 => 332,  608 => 313,  602 => 310,  591 => 302,  587 => 301,  581 => 297,  572 => 295,  568 => 293,  566 => 292,  562 => 291,  558 => 290,  555 => 289,  551 => 288,  538 => 278,  533 => 276,  527 => 273,  517 => 265,  506 => 263,  502 => 261,  500 => 260,  496 => 259,  493 => 258,  489 => 257,  483 => 254,  474 => 248,  468 => 245,  464 => 244,  458 => 240,  449 => 238,  445 => 236,  443 => 235,  439 => 234,  435 => 233,  432 => 232,  428 => 231,  415 => 221,  410 => 219,  404 => 216,  396 => 210,  390 => 207,  387 => 206,  381 => 202,  370 => 200,  366 => 198,  364 => 197,  360 => 196,  357 => 195,  353 => 194,  347 => 191,  338 => 185,  333 => 182,  327 => 180,  321 => 178,  319 => 177,  307 => 167,  303 => 165,  301 => 164,  292 => 157,  290 => 156,  283 => 152,  277 => 149,  264 => 138,  253 => 136,  249 => 134,  247 => 133,  243 => 132,  240 => 131,  236 => 130,  230 => 127,  221 => 121,  216 => 118,  210 => 116,  204 => 114,  202 => 113,  191 => 104,  187 => 103,  173 => 92,  167 => 89,  154 => 79,  148 => 78,  136 => 69,  130 => 68,  118 => 59,  107 => 51,  101 => 48,  89 => 39,  82 => 35,  78 => 34,  71 => 30,  63 => 25,  56 => 21,  52 => 20,  45 => 16,  36 => 10,  30 => 7,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/basics.html", "/home/d/dyachezy/tvoymirsporta.ru/public_html/wp-content/plugins/mailpoet/views/settings/basics.html");
    }
}
