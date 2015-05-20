<?php

/* ToDoBundle:Tache:index.html.twig */
class __TwigTemplate_d10bbc7f3b82734ce81916cfe4d39ea8a4e23f6f8fe145e2374edb2cf1258ee5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>TODO.COM</h1>

    <ul>
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "            <li>  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tache_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
            echo "</a></li> 
               
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        
</ul>
        
        <p> <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("tache_new");
        echo "\"></p>
                Ajouter une tache
            
    
    ";
    }

    public function getTemplateName()
    {
        return "ToDoBundle:Tache:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  60 => 11,  48 => 8,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
