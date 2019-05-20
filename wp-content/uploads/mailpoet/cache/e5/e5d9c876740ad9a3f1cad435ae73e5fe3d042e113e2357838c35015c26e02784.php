<?php

/* settings/mta.html */
class __TwigTemplate_3f4f49bf8a74df1382bd52be5245cc3fe332ee01b8002e50d709d0d79cae2e3b extends Twig_Template
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
        $context["intervals"] = array(0 => 1, 1 => 2, 2 => 5, 3 => 10, 4 => 15);
        // line 2
        $context["default_frequency"] = array("website" => array("emails" => 25, "interval" => 5), "smtp" => array("emails" => 100, "interval" => 5));
        // line 12
        echo "
<!-- mta: group -->
<input
  type=\"hidden\"
  id=\"mta_group\"
  name=\"mta_group\"
  value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()), "html", null, true);
        echo "\"
/>
<!-- mta: method -->
<input
  type=\"hidden\"
  id=\"mta_method\"
  name=\"mta[method]\"
  value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "method", array()), "html", null, true);
        echo "\"
/>

<!-- mta: sending frequency -->
<input
  type=\"hidden\"
  id=\"mta_frequency_emails\"
  name=\"mta[frequency][emails]\"
  value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "emails", array()), "html", null, true);
        echo "\"
/>
<input
  type=\"hidden\"
  id=\"mta_frequency_interval\"
  name=\"mta[frequency][interval]\"
  value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()), "html", null, true);
        echo "\"
/>

<!-- smtp: available sending methods -->
<ul class=\"mailpoet_sending_methods clearfix\">
  <li
    data-group=\"mailpoet\"
    ";
        // line 46
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "mailpoet")) {
            echo "class=\"mailpoet_active\"";
        }
        // line 47
        echo "  >
    <h3>
      <img
        src=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/img/mailpoet_logo.png\"
        alt=\"MailPoet\"
        width=\"137\"
        height=\"54\"
      />
    </h3>

    <p
      class=\"mailpoet_description";
        // line 58
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "mailpoet")) {
            echo " mailpoet_hidden";
        }
        echo "\"
      id=\"mailpoet_sending_method_active_text\"
    >
      <strong>";
        // line 61
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You're now sending with MailPoet!");
        echo "</strong>
      <br />
      ";
        // line 63
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Great, you're all set up. Your emails will now be sent quickly and reliably!");
        echo "
    </p>

    <p
      class=\"mailpoet_description";
        // line 67
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "mailpoet")) {
            echo " mailpoet_hidden";
        }
        echo "\"
      id=\"mailpoet_sending_method_inactive_text\"
    >
      <strong>";
        // line 70
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Solve all of your sending problems!");
        echo "</strong>
      <br />
      ";
        // line 72
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("We offer affordable email packages with speeds up to 50 times faster than the competition.");
        echo "
      <br/>
      <br/>
      <a
        href=\"https://account.mailpoet.com?s=";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["total_subscribers"]) ? $context["total_subscribers"] : null), "html", null, true);
        echo "&utm_source=plugin&utm_campaign=purchase&utm_medium=settings\"
        class=\"button button-primary\"
        target=\"_blank\"
      >";
        // line 79
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("View Email Plans");
        echo "</a>
    </p>

    <div class=\"mailpoet_status\">
      <span>";
        // line 83
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activated");
        echo "</span>
    </div>

    <div class=\"mailpoet_actions\">
      <a
        class=\"button-secondary\"
        href=\"#mta/mailpoet\">";
        // line 89
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Configure");
        echo "</a>
    </div>
  </li>
  <li
    data-group=\"website\"
    ";
        // line 94
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "website")) {
            echo "class=\"mailpoet_active\"";
        }
        // line 95
        echo "  >
    <h3>";
        // line 96
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your web host / web server");
        echo "</h3>

    <p class=\"mailpoet_description\">
      <strong>";
        // line 99
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Free, but not recommended");
        echo "</strong>
      <br />
      ";
        // line 101
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Web hosts generally have a bad reputation as a sender. Your newsletter will probably be considered spam.");
        echo "
    </p>

    <div class=\"mailpoet_status\">
      <span>";
        // line 105
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activated");
        echo "</span>
    </div>

    <div class=\"mailpoet_actions\">
      <a
        class=\"button-secondary\"
        href=\"#mta/website\">";
        // line 111
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Configure");
        echo "</a>
    </div>
  </li>
  <li
    data-group=\"smtp\"
    ";
        // line 116
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            echo "class=\"mailpoet_active\"";
        }
        // line 117
        echo "  >
    <h3>";
        // line 118
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Third-party");
        echo "</h3>

    <p class=\"mailpoet_description\">
      <strong>";
        // line 121
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("For SMTP, SendGrid or Amazon SES");
        echo "</strong>
      <br />
      ";
        // line 123
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("We only recommend using a third-party service if you are a technical user.");
        echo "
    </p>

    <div class=\"mailpoet_status\">
      <span>";
        // line 127
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activated");
        echo "</span>
    </div>

    <div class=\"mailpoet_actions\">
      <a
        class=\"button-secondary\"
        href=\"#mta/smtp\">";
        // line 133
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Configure");
        echo "</a>
    </div>
  </li>
</ul>

<div id=\"mailpoet_sending_method_setup\">
  <!-- Sending Method: MailPoet -->
  <div
    class=\"mailpoet_sending_method\"
    data-group=\"mailpoet\"
    style=\"display:none;\"
  >
    <h3>";
        // line 145
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Already have a key?");
        echo "</h3>
    <table class=\"form-table\">
      <tbody>
        <tr>
          <th scope=\"row\">
            <label for=\"mailpoet_api_key\">
              ";
        // line 151
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your key");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"mailpoet_api_key\"
              name=\"mta[mailpoet_api_key]\"
              value=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "mailpoet_api_key", array()), "html", null, true);
        echo "\"
            />
            <a
              id=\"mailpoet_api_key_verify\"
              class=\"button-secondary\"
            >";
        // line 165
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Verify");
        echo "</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Sending Method: Website -->
  <div
    class=\"mailpoet_sending_method\"
    data-group=\"website\"
    style=\"display:none;\"
  >
    <table class=\"form-table\">
      <tbody>
          <th scope=\"row\">
            <label for=\"mailpoet_web_host\">
              ";
        // line 182
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending frequency");
        echo "
            </label>
          </th>
          <td>
            <p>
              <!-- sending frequency -->
              <select
                id=\"mailpoet_web_host\"
                name=\"web_host\"
              >
                <option value=\"auto\">
                  ";
        // line 193
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Safe default values");
        echo "
                </option>
                <option
                  value=\"manual\"
                  ";
        // line 197
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "web_host", array()) == "manual")) {
            // line 198
            echo "                    selected=\"selected\"
                  ";
        }
        // line 200
        echo "                >
                  ";
        // line 201
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("I'll set my own frequency");
        echo "
                </option>

                <!-- web hosts -->
                <optgroup
                  label=\"";
        // line 206
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Input your host's recommended sending frequency");
        echo "\"
                >
                ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["hosts"]) ? $context["hosts"] : null), "web", array()));
        foreach ($context['_seq'] as $context["host_key"] => $context["host"]) {
            // line 209
            echo "                  <option
                    value=\"";
            // line 210
            echo twig_escape_filter($this->env, $context["host_key"], "html", null, true);
            echo "\"
                    data-emails=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "emails", array()), "html", null, true);
            echo "\"
                    data-interval=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "interval", array()), "html", null, true);
            echo "\"
                    ";
            // line 213
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "web_host", array()) == $context["host_key"])) {
                // line 214
                echo "                      selected=\"selected\"
                    ";
            }
            // line 216
            echo "                  >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "name", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['host_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "                </optgroup>
              </select>
              &nbsp;
              <!-- website: sending frequency -->
              <span id=\"mailpoet_website_sending_frequency\"></span>
            </p>

            <!-- website: manual sending frequency -->
            <div id=\"mailpoet_sending_frequency_manual\" style=\"display:none;\">
              <p>
                <input
                  id=\"website_frequency_emails\"
                  type=\"number\"
                  min=\"1\"
                  max=\"1000\"
                  ";
        // line 233
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "website")) {
            // line 234
            echo "                    value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "emails", array()), "html", null, true);
            echo "\"
                  ";
        } else {
            // line 236
            echo "                    value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "emails", array()), "html", null, true);
            echo "\"
                  ";
        }
        // line 238
        echo "                />
                ";
        // line 239
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("emails");
        echo "
                <select id=\"website_frequency_interval\">
                  ";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["intervals"]) ? $context["intervals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["interval"]) {
            // line 242
            echo "                    <option
                      value=\"";
            // line 243
            echo twig_escape_filter($this->env, $context["interval"], "html", null, true);
            echo "\"
                      ";
            // line 245
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()) && (            // line 246
$context["interval"] == $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "interval", array())))) {
                // line 248
                echo "                      selected=\"selected\"
                      ";
            }
            // line 250
            echo "                      ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()) == $context["interval"])) {
                // line 251
                echo "                        selected=\"selected\"
                      ";
            }
            // line 253
            echo "                    >
                      ";
            // line 254
            echo $this->env->getExtension('MailPoet\Twig\Functions')->getSendingFrequency($context["interval"]);
            echo "
                      ";
            // line 255
            if (($context["interval"] == $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "interval", array()))) {
                // line 256
                echo "                        (";
                echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("recommended");
                echo ")
                      ";
            }
            // line 258
            echo "                    </option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interval'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "                </select>
                <span id=\"mailpoet_website_daily_emails\"></span>
              </p>
              <br />
              <p>
                ";
        // line 265
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("<strong>Warning!</strong> Sending more than the recommended amount of emails? You may break the terms of your web host or provider!");
        echo "'
                <br />
                ";
        // line 267
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please ask your host for the maximum number of emails you are allowed to send per day.");
        echo "
              </p>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Sending Method: SMTP -->
  <div class=\"mailpoet_sending_method\" data-group=\"smtp\" style=\"display:none;\">
    <table class=\"form-table\">
      <tbody>
        <tr>
          <th scope=\"row\">
            <label for=\"mailpoet_smtp_provider\">
              ";
        // line 283
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Provider");
        echo "
            </label>
          </th>
          <td>
            <!-- smtp provider -->
            <select
              id=\"mailpoet_smtp_provider\"
              name=\"smtp_provider\"
            >
              <option data-interval=\"5\" data-emails=\"100\" value=\"manual\">
                ";
        // line 293
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Custom SMTP");
        echo "
              </option>
              <!-- providers -->
              <optgroup label=\"";
        // line 296
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select your provider");
        echo "\">
                ";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["hosts"]) ? $context["hosts"] : null), "smtp", array()));
        foreach ($context['_seq'] as $context["host_key"] => $context["host"]) {
            // line 298
            echo "                  <option
                    value=\"";
            // line 299
            echo twig_escape_filter($this->env, $context["host_key"], "html", null, true);
            echo "\"
                    data-emails=\"";
            // line 300
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "emails", array()), "html", null, true);
            echo "\"
                    data-interval=\"";
            // line 301
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "interval", array()), "html", null, true);
            echo "\"
                    data-fields=\"";
            // line 302
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["host"], "fields", array()), ","), "html", null, true);
            echo "\"
                    ";
            // line 303
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) == $context["host_key"])) {
                // line 304
                echo "                      selected=\"selected\"
                    ";
            }
            // line 306
            echo "                  >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "name", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['host_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 308
        echo "              </optgroup>
            </select>
          </td>
        </tr>
        <tr>
          <th scope=\"row\">
            <label for=\"mailpoet_smtp_provider\">
              ";
        // line 315
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending frequency");
        echo "
            </label>
          </th>
          <td>
            <!-- smtp: sending frequency -->
            <p>
              <input
                id=\"smtp_frequency_emails\"
                type=\"number\"
                min=\"1\"
                max=\"1000\"
                ";
        // line 326
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 327
            echo "                  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "emails", array()), "html", null, true);
            echo "\"
                ";
        } else {
            // line 329
            echo "                  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "smtp", array()), "emails", array()), "html", null, true);
            echo "\"
                ";
        }
        // line 331
        echo "              />
              ";
        // line 332
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("emails");
        echo "
              <select id=\"smtp_frequency_interval\">
                ";
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["intervals"]) ? $context["intervals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["interval"]) {
            // line 335
            echo "                  <option
                    value=\"";
            // line 336
            echo twig_escape_filter($this->env, $context["interval"], "html", null, true);
            echo "\"
                    ";
            // line 338
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()) && (            // line 339
$context["interval"] == $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "smtp", array()), "interval", array())))) {
                // line 341
                echo "                    selected=\"selected\"
                    ";
            }
            // line 343
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()) == $context["interval"])) {
                // line 344
                echo "                      selected=\"selected\"
                    ";
            }
            // line 346
            echo "                  >
                    ";
            // line 347
            echo $this->env->getExtension('MailPoet\Twig\Functions')->getSendingFrequency($context["interval"]);
            echo "
                    ";
            // line 348
            if (($context["interval"] == $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "smtp", array()), "interval", array()))) {
                // line 349
                echo "                      (";
                echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("recommended");
                echo ")
                    ";
            }
            // line 351
            echo "                  </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interval'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        echo "              </select>
              <span id=\"mailpoet_smtp_daily_emails\"></span>
            </p>
          </td>
        </tr>
        <!-- smtp: host -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"host\">
          <th scope=\"row\">
            <label for=\"settings[mta_host]\">
              ";
        // line 362
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SMTP Hostname");
        echo "
            </label>
            <p class=\"description\">
              ";
        // line 365
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("e.g.: smtp.mydomain.com");
        echo "
            </p>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"settings[mta_host]\"
              name=\"mta[host]\"
              value=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "host", array()), "html", null, true);
        echo "\" />
          </td>
        </tr>
        <!-- smtp: port -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"port\">
          <th scope=\"row\">
            <label for=\"settings[mta_port]\">
              ";
        // line 381
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SMTP Port");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"number\"
              max=\"65535\"
              min=\"1\"
              maxlength=\"5\"
              style=\"width:5em;\"
              id=\"settings[mta_port]\"
              name=\"mta[port]\"
              value=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "port", array()), "html", null, true);
        echo "\"
            />
          </td>
        </tr>

        <!-- smtp: amazon region -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"region\">
          <th scope=\"row\">
            <label for=\"settings[mta_region]\">
              ";
        // line 402
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Region");
        echo "
            </label>
          </th>
          <td>
            <select
              id=\"settings[mta_region]\"
              name=\"mta[region]\"
              value=\"";
        // line 409
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 410
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "region", array()), "html", null, true);
        }
        // line 411
        echo "\"
            >
              ";
        // line 413
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["hosts"]) ? $context["hosts"] : null), "smtp", array()), "AmazonSES", array()), "regions", array()));
        foreach ($context['_seq'] as $context["region"] => $context["server"]) {
            // line 414
            echo "                <option
                  value=\"";
            // line 415
            echo twig_escape_filter($this->env, $context["server"], "html", null, true);
            echo "\"
                  ";
            // line 416
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "region", array()) == $context["server"])) {
                // line 417
                echo "                    selected=\"selected\"
                  ";
            }
            // line 419
            echo "                >
                  ";
            // line 420
            echo twig_escape_filter($this->env, $context["region"], "html", null, true);
            echo "
                </option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['region'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 423
        echo "            </select>
          </td>
        </tr>

        <!-- smtp: amazon access_key -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"access_key\">
          <th scope=\"row\">
            <label for=\"settings[mta_access_key]\">
              ";
        // line 431
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Access Key");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"settings[mta_access_key]\"

              name=\"mta[access_key]\"
              value=\"";
        // line 441
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 442
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "access_key", array()), "html", null, true);
        }
        // line 443
        echo "\"
            />
          </td>
        </tr>

        <!-- smtp: amazon secret_key -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"secret_key\">
          <th scope=\"row\">
            <label for=\"settings[mta_secret_key]\">
              ";
        // line 452
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Secret Key");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"settings[mta_secret_key]\"

              name=\"mta[secret_key]\"
              value=\"";
        // line 462
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 463
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "secret_key", array()), "html", null, true);
        }
        // line 464
        echo "\"
            />
          </td>
        </tr>

        <!-- smtp: domain -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"domain\">
          <th scope=\"row\">
            <label for=\"settings[mta_domain]\">
              ";
        // line 473
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Domain");
        echo "
            </label>
            <p class=\"description\">
              ";
        // line 476
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("e.g.: smtp.mydomain.com");
        echo "
            </p>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"settings[mta_domain]\"
              name=\"mta[domain]\"
              value=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "domain", array()), "html", null, true);
        echo "\" />
          </td>
        </tr>

        <!-- smtp: api key -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"api_key\">
          <th scope=\"row\">
            <label for=\"settings[mta_api_key]\">
              ";
        // line 493
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("API Key");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"settings[mta_api_key]\"
              name=\"mta[api_key]\"
              value=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "api_key", array()), "html", null, true);
        echo "\"
            />
          </td>
        </tr>

        <!-- smtp: login -->
        <tr id=\"mta_login\" class=\"mailpoet_smtp_field\" data-field=\"login\">
          <th scope=\"row\">
            <label for=\"settings[mta_login]\">
              ";
        // line 511
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Login");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"settings[mta_login]\"
              name=\"mta[login]\"
              value=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "login", array()), "html", null, true);
        echo "\"
            />
          </td>
        </tr>
        <!-- smtp: password -->
        <tr id=\"mta_password\" class=\"mailpoet_smtp_field\" data-field=\"password\">
          <th scope=\"row\">
            <label for=\"settings[mta_password]\">
              ";
        // line 528
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Password");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"password\"
              class=\"regular-text\"
              id=\"settings[mta_password]\"
              name=\"mta[password]\"
              value=\"";
        // line 537
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "password", array()), "html", null, true);
        echo "\"
            />
          </td>
        </tr>
        <!-- smtp: security protocol -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"encryption\">
          <th scope=\"row\">
            <label for=\"settings[mta_encryption]\">
              ";
        // line 545
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Secure Connection");
        echo "
            </label>
          </th>
          <td>
            <select id=\"settings[mta_encryption]\" name=\"mta[encryption]\">
              <option value=\"\">";
        // line 550
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "</option>
              <option
                value=\"ssl\"
                ";
        // line 553
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "encryption", array()) == "ssl")) {
            // line 554
            echo "                  selected=\"selected\"
                ";
        }
        // line 556
        echo "              >SSL</option>
              <option
                value=\"tls\"
                ";
        // line 559
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "encryption", array()) == "tls")) {
            // line 560
            echo "                  selected=\"selected\"
                ";
        }
        // line 562
        echo "              >TLS</option>
            </select>
          </td>
        </tr>
        <!-- smtp: authentication -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"authentication\">
          <th scope=\"row\">
            <label>
              ";
        // line 570
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Authentication");
        echo "
            </label>
            <p class=\"description\">
              ";
        // line 573
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave this option set to Yes. Only a tiny portion of SMTP services prefer Authentication to be turned off.");
        echo "
            </p>
          </th>
          <td>
            <label>
              <input
                type=\"radio\"
                value=\"1\"
                name=\"mta[authentication]\"
                ";
        // line 583
        if (( !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "authentication", array()) || ($this->getAttribute($this->getAttribute(        // line 584
(isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "authentication", array()) == "1"))) {
            // line 585
            echo "                  checked=\"checked\"
                ";
        }
        // line 587
        echo "              />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
            </label>
            &nbsp;
            <label>
              <input
                type=\"radio\"
                value=\"-1\"
                name=\"mta[authentication]\"
                ";
        // line 595
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "authentication", array()) == "-1")) {
            // line 596
            echo "                  checked=\"checked\"
                ";
        }
        // line 598
        echo "              />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
            </label>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <table class=\"form-table\">
    <tbody>
      <!-- SPF -->
      <tr id=\"mailpoet_mta_spf\">
        <th scope=\"row\">
          <label>
            ";
        // line 612
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SPF Signature (Highly recommended!)");
        echo "
          </label>
          <p class=\"description\">
            ";
        // line 615
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This improves your delivery rate by verifying that you're allowed to send emails from your domain.");
        echo "
          </p>
        </th>
        <td>
          <p>
            ";
        // line 620
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SPF is set up in your DNS. Read your host's support documentation for more information.");
        echo "
          </p>
        </td>
      </tr>
      <!-- test method -->
      <tr>
        <th scope=\"row\">
          <label for=\"mailpoet_mta_test_email\">
            ";
        // line 628
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Test the sending method");
        echo "
          </label>
        </th>
        <td>
          <p>
            <input
              type=\"text\"
              id=\"mailpoet_mta_test_email\"
              class=\"regular-text\"
              value=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_user"]) ? $context["current_user"] : null), "user_email", array()), "html", null, true);
        echo "\"
            />
            <a
              id=\"mailpoet_mta_test\"
              class=\"button-secondary\"
            >";
        // line 642
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send a test email");
        echo "</a>
          </p>
        </td>
      </tr>
      <!-- activate or cancel -->
      <tr>
        <th scope=\"row\">
          <p>
            <a
              href=\"javascript:;\"
              class=\"mailpoet_mta_setup_save button button-primary\"
            >";
        // line 653
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activate");
        echo "</a>
            &nbsp;
            <a
              href=\"javascript:;\"
              class=\"mailpoet_mta_setup_cancel\"
            >";
        // line 658
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("or Cancel");
        echo "</a>
          </p>
        </th>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

<script type=\"text/javascript\">
  jQuery(function(\$) {
    var sending_frequency_template =
      Handlebars.compile(\$('#mailpoet_sending_frequency_template').html());

    // om dom loaded
    \$(function() {
      // constrain number type inputs
      \$('input[type=\"number\"]').on('keyup', function() {
        var currentValue = \$(this).val();
        if(!currentValue) return;

        var minValue = \$(this).attr('min');
        var maxValue = \$(this).attr('max');
        \$(this).val(Math.min(Math.max(minValue, currentValue), maxValue));
      });

      // testing sending method
      \$('#mailpoet_mta_test').on('click', function() {
        // get form data
        var data = \$('#mailpoet_settings_form').serializeObject();
        // get test email and include it in data
        var recipient = \$('#mailpoet_mta_test_email').val();

        var settings = jQuery('#mailpoet_settings_form').serializeObject();
        var mailer = settings.mta;
        mailer.method = getMethodFromGroup(
          (\$('.mailpoet_sending_method:visible').data('group') !== undefined)
          ? \$('.mailpoet_sending_method:visible').data('group')
          : \$('#mta_group').val()
        );

        // check that we have a from address
        if(settings.sender.address.length === 0) {
          // validation
          return MailPoet.Notice.error(
            '";
        // line 703
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("The email could not be sent. Make sure the option \"Email notifications\" has a FROM email address in the Basics tab."), "js"), "html", null, true);
        echo "',
            { scroll: true, static: true }
          );
        }

        MailPoet.Modal.loading(true);
        MailPoet.Ajax.post({
          api_version: window.mailpoet_api_version,
          endpoint: 'mailer',
          action: 'send',
          data: {
            mailer: mailer,
            newsletter: {
              subject: \"";
        // line 716
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This is a Sending Method Test");
        echo "\",
              body: {
                text: \"";
        // line 718
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yup, it works! You can start blasting away emails to the moon.");
        echo "\"
              }
            },
            subscriber: recipient
          }
        }).always(function() {
          MailPoet.Modal.loading(false);
        }).done(function(response) {
          MailPoet.Notice.success(
            \"";
        // line 727
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("The email has been sent! Check your inbox."), "js"), "html", null, true);
        echo "\",
            { scroll: true }
          );
        }).fail(function(response) {
          if (response.errors.length > 0) {
            MailPoet.Notice.error(
              response.errors.map(function(error) { return _.escape(error.message); }),
              { scroll: true }
            );
          }
        });
      });

      // verifying api key
      \$('#mailpoet_api_key_verify').on('click', function() {
        // get api key
        var key = \$('#mailpoet_api_key').val();

        if(key.length === 0) {
          // validation
          return MailPoet.Notice.error(
            '";
        // line 748
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please specify an API key before validating it."), "js"), "html", null, true);
        echo "',
            { scroll: true, static: true }
          );
        }

        MailPoet.Modal.loading(true);
        MailPoet.Ajax.post({
          api_version: window.mailpoet_api_version,
          endpoint: 'services',
          action: 'verifyMailPoetKey',
          data: {
            key: key
          }
        }).always(function() {
          MailPoet.Modal.loading(false);
        }).done(function(response) {
          // Hide server error notices
          \$('.mailpoet_notice_server').hide();
          MailPoet.Notice.success(
            response.data.message,
            { scroll: true }
          );
        }).fail(function(response) {
          if (response.errors.length > 0) {
            MailPoet.Notice.error(
              response.errors.map(function(error) { return error.message; }),
              { scroll: true }
            );
          }
        });
      });

      // sending frequency update based on selected provider
      \$('#mailpoet_smtp_provider').on('change keyup', setProviderForm);
      \$('#mailpoet_web_host').on('change keyup', renderHostSendingFrequency);

      // update manual sending frequency when values are changed
      \$('#website_frequency_emails').on('change keyup', function() {
        updateSendingFrequency('website');
      });
      \$('#website_frequency_interval').on('change keyup', function() {
        updateSendingFrequency('website');
      });

      \$('#smtp_frequency_emails').on('change keyup', function() {
        updateSendingFrequency('smtp');
      });
      \$('#smtp_frequency_interval').on('change keyup', function() {
        updateSendingFrequency('smtp');
      });

      // save configuration of a sending method
      \$('.mailpoet_mta_setup_save').on('click', function() {
        // get selected method
        var group = \$('.mailpoet_sending_method:visible').data('group'),
          emails = \$('#'+group+'_frequency_emails').val(),
          interval = \$('#'+group+'_frequency_interval').val();

        // set sending method
        if(group === undefined) {
          MailPoet.Notice.error(
            \"";
        // line 809
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("You have selected an invalid sending method."), "js"), "html", null, true);
        echo "\"
          );
        } else {
          if(
            group === 'mailpoet'
            && \$('#mailpoet_api_key').val().trim().length === 0
          ) {
            MailPoet.Notice.error(
              \"";
        // line 817
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("You need to specify a MailPoet account key."), "js"), "html", null, true);
        echo "\"
            );
            return false;
          }

          // set new sending method active
          setSendingMethodGroup(group);

          // update sending frequency values
          \$('#mta_frequency_emails').val(emails);
          \$('#mta_frequency_interval').val(interval);

          // enforce signup confirmation depending on selected group
          setSignupConfirmation(group);

          // back to selection of sending methods
          MailPoet.Router.navigate('mta', { trigger: true });

          // save settings
          \$('.mailpoet_settings_submit > input').trigger('click');
        }
      });

      function setSignupConfirmation(group) {
        if (group === 'mailpoet') {
          // force signup confirmation (select \"Yes\")
          \$('.mailpoet_signup_confirmation[value=\"1\"]').attr('checked', true);
          \$('.mailpoet_signup_confirmation[value=\"\"]').attr('checked', false);

          // hide radio inputs
          \$('#mailpoet_signup_confirmation_input').hide();

          // show mailpoet specific notice
          \$('#mailpoet_signup_confirmation_notice').show();

          // show signup confirmation options
          \$('#mailpoet_signup_options').show();
        } else {
          // show radio inputs
          \$('#mailpoet_signup_confirmation_input').show();

          // hide mailpoet specific notice
          \$('#mailpoet_signup_confirmation_notice').hide();
        }
      }

      function setSendingMethodGroup(group) {
        // deactivate other sending methods
        \$('.mailpoet_sending_methods .mailpoet_active')
          .removeClass('mailpoet_active');

        // set active sending method
        \$('.mailpoet_sending_methods li[data-group=\"'+group+'\"]')
          .addClass('mailpoet_active');

        // set smtp method value
        \$('#mta_group').val(group);

        var method = getMethodFromGroup(group);

        \$('#mta_method').val(method);

        // set MailPoet method description
        \$('#mailpoet_sending_method_active_text')
          .toggleClass('mailpoet_hidden', group !== 'mailpoet');
        \$('#mailpoet_sending_method_inactive_text')
          .toggleClass('mailpoet_hidden', group === 'mailpoet');

        if(group === 'mailpoet') {
          // Verify key on saving
          \$('#mailpoet_api_key_verify').trigger('click');
        } else {
          // Hide server error notices
          \$('.mailpoet_notice_server').hide();
        }
      }

      function getMethodFromGroup(group) {
        var group = group || 'website';
        switch(group) {
          case 'mailpoet':
            return 'MailPoet';
          break;
          case 'website':
            return 'PHPMail';
          break;
          case 'smtp':
            var method = \$('#mailpoet_smtp_provider').val();
            if(method === 'manual') {
              return 'SMTP';
            }
            return method;
          break;
        }
      }

      // cancel configuration of a sending method
      \$('.mailpoet_mta_setup_cancel').on('click', function() {
        // back to selection of sending methods
        MailPoet.Router.navigate('mta', { trigger: true });
      });

      // render sending frequency form
      \$('#mailpoet_smtp_provider').trigger('change');
      \$('#mailpoet_web_host').trigger('change');
    });

    function setProviderForm() {
      // check provider
      var provider = \$(this).find('option:selected').first();
      var fields = provider.data('fields');

      if(fields === undefined) {
        fields = [
          'host',
          'port',
          'login',
          'password',
          'authentication',
          'encryption'
        ];
      } else {
        fields = fields.split(',');
      }

      \$('.mailpoet_smtp_field').hide();

      fields.map(function(field) {
        \$('.mailpoet_smtp_field[data-field=\"'+field+'\"]').show();
      });

      // update sending frequency
      renderSMTPSendingFrequency(provider);
    }

    function renderSMTPSendingFrequency() {
      // set sending frequency
      setSendingFrequency({
        output: '#mailpoet_smtp_daily_emails',
        only_daily: true,
        emails: \$('#smtp_frequency_emails').val(),
        interval: \$('#smtp_frequency_interval').val()
      });
    }

    function renderHostSendingFrequency() {
      var host = \$(this).find('option:selected').first();
      var emails =
        host.data('emails') || ";
        // line 965
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "emails", array()), "html", null, true);
        echo ";
      var interval =
        host.data('interval') || ";
        // line 967
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "interval", array()), "html", null, true);
        echo ";
      var fields =
        host.data('fields') || '';

      if(host.val() === 'manual' ) {
        // hide  sending frequency
        \$('#mailpoet_website_sending_frequency').hide();
        // show manual sending frequency form
        \$('#mailpoet_sending_frequency_manual').slideDown(200);

        // set sending frequency
        setSendingFrequency({
          output: '#mailpoet_website_daily_emails',
          only_daily: true,
          emails: \$('#website_frequency_emails').val(),
          interval: \$('#website_frequency_interval').val()
        });
      } else {
        \$('#mailpoet_sending_frequency_manual').slideUp(200, function() {
          \$('#mailpoet_website_sending_frequency').show();

          \$('#website_frequency_emails').val(emails);
          \$('#website_frequency_interval').val(interval);
        });

        // set sending frequency
        setSendingFrequency({
          output: '#mailpoet_website_sending_frequency',
          emails: emails,
          interval: interval
        });
      }
    }

    function updateSendingFrequency(method) {
      // get emails
      var options = {
        only_daily: true,
        emails: \$('#'+method+'_frequency_emails').val(),
        interval: \$('#'+method+'_frequency_interval').val()
      };

      var MINUTES_PER_DAY = 1440;
      var SECONDS_PER_DAY = 86400;

      options.daily_emails = ~~(
        (MINUTES_PER_DAY / options.interval) * options.emails
      );

      options.emails_per_second = (~~(
        ((options.daily_emails) / 86400) * 10)
      ) / 10;


      // format daily emails number according to locale
      options.daily_emails = options.daily_emails.toLocaleString();

      \$('#mailpoet_'+method+'_daily_emails').html(
        sending_frequency_template(options)
      );

      // update actual sending frequency values
      \$('#mta_frequency_emails').val(options.emails);
      \$('#mta_frequency_interval').val(options.interval);
    }

    function setSendingFrequency(options) {
      options.daily_emails = ~~((1440 / options.interval) * options.emails);

      // format daily emails number according to locale
      options.daily_emails = options.daily_emails.toLocaleString();

      \$(options.output).html(
        sending_frequency_template(options)
      );
    }

    Handlebars.registerHelper('format_time', function(value, block) {
      var label = null;
      var labels = {
        minute: \"";
        // line 1047
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every minute");
        echo "\",
        minutes: \"";
        // line 1048
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every %1\$d minutes");
        echo "\",
        hour: \"";
        // line 1049
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every hour");
        echo "\",
        hours: \"";
        // line 1050
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every %1\$d hours");
        echo "\"
      };

      // cast time as int
      value = ~~(value);

      // format time depending on the value
      if(value >= 60) {
        // we're dealing with hours
        if(value === 60) {
          label = labels.hour;
        } else {
          label = labels.hours;
        }
        value /= 60;
      } else {
        // we're dealing with minutes
        if(value === 1) {
          label = labels.minute;
        } else {
          label = labels.minutes;
        }
      }

      if(label !== null) {
        return label.replace('%1\$d', value);
      } else {
        return value;
      }
    });
  });
</script>

";
        // line 1083
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "mailpoet_sending_frequency_template", "settings/templates/sending_frequency.hbs");
        // line 1086
        echo "
";
    }

    public function getTemplateName()
    {
        return "settings/mta.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1567 => 1086,  1565 => 1083,  1529 => 1050,  1525 => 1049,  1521 => 1048,  1517 => 1047,  1434 => 967,  1429 => 965,  1278 => 817,  1267 => 809,  1203 => 748,  1179 => 727,  1167 => 718,  1162 => 716,  1146 => 703,  1098 => 658,  1090 => 653,  1076 => 642,  1068 => 637,  1056 => 628,  1045 => 620,  1037 => 615,  1031 => 612,  1013 => 598,  1009 => 596,  1007 => 595,  995 => 587,  991 => 585,  989 => 584,  988 => 583,  976 => 573,  970 => 570,  960 => 562,  956 => 560,  954 => 559,  949 => 556,  945 => 554,  943 => 553,  937 => 550,  929 => 545,  918 => 537,  906 => 528,  895 => 520,  883 => 511,  871 => 502,  859 => 493,  848 => 485,  836 => 476,  830 => 473,  819 => 464,  816 => 463,  814 => 462,  801 => 452,  790 => 443,  787 => 442,  785 => 441,  772 => 431,  762 => 423,  753 => 420,  750 => 419,  746 => 417,  744 => 416,  740 => 415,  737 => 414,  733 => 413,  729 => 411,  726 => 410,  724 => 409,  714 => 402,  702 => 393,  687 => 381,  677 => 374,  665 => 365,  659 => 362,  648 => 353,  641 => 351,  635 => 349,  633 => 348,  629 => 347,  626 => 346,  622 => 344,  619 => 343,  615 => 341,  613 => 339,  612 => 338,  608 => 336,  605 => 335,  601 => 334,  596 => 332,  593 => 331,  587 => 329,  581 => 327,  579 => 326,  565 => 315,  556 => 308,  547 => 306,  543 => 304,  541 => 303,  537 => 302,  533 => 301,  529 => 300,  525 => 299,  522 => 298,  518 => 297,  514 => 296,  508 => 293,  495 => 283,  476 => 267,  471 => 265,  464 => 260,  457 => 258,  451 => 256,  449 => 255,  445 => 254,  442 => 253,  438 => 251,  435 => 250,  431 => 248,  429 => 246,  428 => 245,  424 => 243,  421 => 242,  417 => 241,  412 => 239,  409 => 238,  403 => 236,  397 => 234,  395 => 233,  378 => 218,  369 => 216,  365 => 214,  363 => 213,  359 => 212,  355 => 211,  351 => 210,  348 => 209,  344 => 208,  339 => 206,  331 => 201,  328 => 200,  324 => 198,  322 => 197,  315 => 193,  301 => 182,  281 => 165,  273 => 160,  261 => 151,  252 => 145,  237 => 133,  228 => 127,  221 => 123,  216 => 121,  210 => 118,  207 => 117,  203 => 116,  195 => 111,  186 => 105,  179 => 101,  174 => 99,  168 => 96,  165 => 95,  161 => 94,  153 => 89,  144 => 83,  137 => 79,  131 => 76,  124 => 72,  119 => 70,  111 => 67,  104 => 63,  99 => 61,  91 => 58,  80 => 50,  75 => 47,  71 => 46,  61 => 39,  52 => 33,  41 => 25,  31 => 18,  23 => 12,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/mta.html", "/home/d/dyachezy/tvoymirsporta.ru/public_html/wp-content/plugins/mailpoet/views/settings/mta.html");
    }
}
