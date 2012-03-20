<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_9e29e2882bfff31155f0f988cace38ff extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_jsonencode_filter($this->getAttribute($this->getContext($context, "exception"), "toarray"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
