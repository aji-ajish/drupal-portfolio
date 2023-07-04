<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/portfolio/templates/layout/region--footer.html.twig */
class __TwigTemplate_ff8fe4b1e879a6eacea8974c2e8055b624c8c15c224cd80e45d3801ed4ed8b79 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo " <!-- ======= Footer ======= -->
 <footer id=\"footer\">
 <div class=\"container\">
   <div class=\"copyright\">
\t &copy; Copyright <strong><span>iPortfolio</span></strong>
   </div>
   <div class=\"credits\">
\t <!-- All the links in the footer should remain intact. -->
\t <!-- You can delete the links only if you purchased the pro version. -->
\t <!-- Licensing information: https://bootstrapmade.com/license/ -->
\t <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
\t Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
   </div>
 </div>
</footer><!-- End  Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 20, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 20, $this->source)), "html", null, true);
        echo "/vendor/purecounter/purecounter_vanilla.js\"></script>
<script src=\"";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 21, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 21, $this->source)), "html", null, true);
        echo "/vendor/aos/aos.js\"></script>
<script src=\"";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 22, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 22, $this->source)), "html", null, true);
        echo "/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 23, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 23, $this->source)), "html", null, true);
        echo "/vendor/glightbox/js/glightbox.min.js\"></script>
<script src=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 24, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 24, $this->source)), "html", null, true);
        echo "/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
<script src=\"";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 25, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 25, $this->source)), "html", null, true);
        echo "/vendor/swiper/swiper-bundle.min.js\"></script>
<script src=\"";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 26, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 26, $this->source)), "html", null, true);
        echo "/vendor/typed.js/typed.umd.js\"></script>
<script src=\"";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 27, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 27, $this->source)), "html", null, true);
        echo "/vendor/waypoints/noframework.waypoints.js\"></script>
<script src=\"";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 28, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 28, $this->source)), "html", null, true);
        echo "/vendor/php-email-form/validate.js\"></script>

<!-- Template Main JS File -->
<script src=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 31, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 31, $this->source)), "html", null, true);
        echo "/js/main.js\"></script>";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/layout/region--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 31,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  68 => 22,  64 => 21,  60 => 20,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/portfolio/templates/layout/region--footer.html.twig", "/opt/lampp/htdocs/php/ajish-portfolio/themes/custom/portfolio/templates/layout/region--footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
