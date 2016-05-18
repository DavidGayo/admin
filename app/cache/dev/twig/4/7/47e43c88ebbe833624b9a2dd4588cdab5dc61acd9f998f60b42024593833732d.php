<?php

/* ::frontend.html.twig */
class __TwigTemplate_47e43c88ebbe833624b9a2dd4588cdab5dc61acd9f998f60b42024593833732d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
    <html>
        <head>
        <meta http-equiv=\"charset=utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link  href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/img/favicon.png"), "html", null, true);
        echo "\" rel=\"shortcut icon\" type=\"image/png\"/>
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        </head>
        <body>
        <div id=\"wrapper\">
    <nav class=\"navbar-default navbar-static-side\" role=\"navigation\">
        <div class=\"sidebar-collapse\">
            <ul class=\"nav\" id=\"side-menu\">
                <li class=\"nav-header\">
                    <div  class=\"dropdown profile-element\"> <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/home"), "html", null, true);
        echo "\">
                            <img alt=\"image\" style=\"width: 100%;\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/img/logo.png"), "html", null, true);
        echo "\" />
                             </a>
                    </div>
                    <div class=\"logo-element\">
                        <img alt=\"image\" style=\"width: 100%;\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/img/logo.png"), "html", null, true);
        echo "\" />
                    </div>
                </li>
                <li>
                    <a><i class=\"fa fa-shield\"></i><span class=\"nav-label\">Producto</span><span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/wdfim"), "html", null, true);
        echo "\">Warriors Defender FIM</a></li>
                        <li><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/wdfir"), "html", null, true);
        echo "\">Warriors Defender Firewall</a></li>
                        <li><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/wdint"), "html", null, true);
        echo "\">Warriors Defender Internet</a></li>
                    </ul>
                </li>
                <li>
                    <a><i class=\"fa fa-sort-amount-desc\"></i><span class=\"nav-label\">Submenu</span><span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/addsubmenu"), "html", null, true);
        echo "\">Agregar</a></li>
                        <li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/listasubmenu"), "html", null, true);
        echo "\">Editar/Eliminar</a></li>
                    </ul>
                </li>
                <li>
                    <a><i class=\"fa fa-link\"></i> <span class=\"nav-label\">URL</span><span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/addurl"), "html", null, true);
        echo "\">Agregar</a></li>
                        <li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/listaurl"), "html", null, true);
        echo "\">Editar/Eliminar</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>

        <div id=\"page-wrapper\" class=\"micss\">
        <div class=\"row border-bottom\">
        <nav class=\"navbar navbar-static-top white-bg\" role=\"navigation\" style=\"margin-bottom: 0\">
        <div class=\"navbar-header\">
            <a class=\"navbar-minimalize minimalize-styl-2 btn btn-danger \" href=\"#\"><i class=\"fa fa-bars\"></i> </a>
        </div>
            <ul class=\"nav navbar-top-links navbar-right\">

                <li>
                    <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("admin_salir");
        echo "\">
                        <i class=\"fa fa-sign-out\"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
 
        
            <div class=\"wrapper wrapper-content\">
                     ";
        // line 79
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "  
                
        <div class=\"footer\">
            <div>
                <strong>Copyright</strong> <a href=\"http://warriorslabs.com/\">WarriorsLabs</a> &copy; 2015-2017
            </div>
        </div>
        </div>
    </div>

     
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery-2.1.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/plugins/metisMenu/jquery.metisMenu.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/plugins/slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/plugins/flot/jquery.flot.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/plugins/flot/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/plugins/flot/jquery.flot.spline.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/plugins/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/plugins/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/plugins/flot/jquery.flot.symbol.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/plugins/flot/jquery.flot.time.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/plugins/peity/jquery.peity.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/demo/peity-demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/inspinia.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/plugins/pace/pace.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/plugins/easypiechart/jquery.easypiechart.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/demo/sparkline-demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
     ";
        // line 114
        $this->displayBlock('javascripts', $context, $blocks);
        // line 116
        echo "    </body>
</html> ";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/plugins/morris/morris-0.4.3.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/plugins/gritter/jquery.gritter.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/animate.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/plugins/iCheck/custom.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        ";
    }

    // line 79
    public function block_body($context, array $blocks = array())
    {
        // line 80
        echo "        
                     ";
    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        // line 115
        echo "     ";
    }

    public function getTemplateName()
    {
        return "::frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 115,  294 => 114,  289 => 80,  286 => 79,  280 => 15,  276 => 14,  272 => 13,  268 => 12,  264 => 11,  260 => 10,  255 => 9,  252 => 8,  247 => 7,  242 => 116,  240 => 114,  236 => 113,  232 => 112,  228 => 111,  224 => 110,  220 => 109,  216 => 108,  212 => 107,  208 => 106,  204 => 105,  200 => 104,  196 => 103,  192 => 102,  188 => 101,  184 => 100,  180 => 99,  176 => 98,  172 => 97,  168 => 96,  164 => 95,  160 => 94,  156 => 93,  152 => 92,  139 => 81,  137 => 79,  123 => 68,  103 => 51,  99 => 50,  90 => 44,  86 => 43,  77 => 37,  73 => 36,  69 => 35,  60 => 29,  53 => 25,  49 => 24,  40 => 17,  38 => 8,  34 => 7,  30 => 6,  23 => 1,);
    }
}
