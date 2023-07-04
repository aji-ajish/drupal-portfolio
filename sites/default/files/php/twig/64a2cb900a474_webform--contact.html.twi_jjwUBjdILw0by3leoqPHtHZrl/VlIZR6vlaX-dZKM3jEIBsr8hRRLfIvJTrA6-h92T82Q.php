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

/* themes/custom/portfolio/templates/paragraphs/webform--contact.html.twig */
class __TwigTemplate_0ef1e5f78fb69c541743b845e6c02ce48e6bc59e27997c488ed89e7e5bbad144 extends \Twig\Template
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
        echo "<form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\">
         <div class=\"row\">
           <div class=\"form-group col-md-6\">
             <label for=\"name\">Your Name</label>
             ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 5), "name", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "
           </div>
           <div class=\"form-group col-md-6\">
             <label for=\"name\">Your Email</label>
             ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 9), "email", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
           </div>
         </div>
         <div class=\"form-group\">
           <label for=\"name\">Subject</label>
           ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 14), "subject", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
         </div>
         <div class=\"form-group\">
           <label for=\"name\">Message</label>
           ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 18), "message", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
         </div>
         <div class=\"my-3\">
           <div class=\"loading\">Loading</div>
           <div class=\"error-message\"></div>
           <div class=\"sent-message\">Your message has been sent. Thank you!</div>
         </div>
         <div class=\"text-center\"><button type=\"submit\">Send Message</button></div>
         
         ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "form_build_id", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "
         ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "form_token", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "
         ";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "form_id", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "
       </form>

       ";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/paragraphs/webform--contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  83 => 28,  79 => 27,  67 => 18,  60 => 14,  52 => 9,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/portfolio/templates/paragraphs/webform--contact.html.twig", "/opt/lampp/htdocs/php/ajish-portfolio/themes/custom/portfolio/templates/paragraphs/webform--contact.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
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
