<?php

/* /Applications/XAMPP/xamppfiles/htdocs/hello-october/themes/martin-flex/partials/contact.htm */
class __TwigTemplate_1cd40d49353a8b50c321557e8741f2172a4cd242726d8909fe4d0749e9ef182d extends Twig_Template
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
        echo "<div class=\"content-section\" id=\"contact\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"heading-section col-md-12 text-center\">
                <h2>Liên hệ</h2>
                <p>Hãy gửi tin nhắn cho chúng tôi</p>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-12\">
               <div class=\"googlemap-wrapper\">
                    <div id=\"map_canvas\" class=\"map-canvas\"></div>
                </div>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-7 col-sm-6\">
                ";
        // line 22
        echo "                ";
        // line 23
        echo "                ";
        // line 24
        echo "                ";
        // line 25
        echo "                ";
        // line 26
        echo "                <ul class=\"contact-info fa-ul\">
                    <li><i class=\"fa fa-lg fa-li\"></i> <strong>Công ty TNHH Hoàng Gia Ân</strong></li>
                    <li><i class=\"fa fa-phone fa-lg fa-li\"></i> 010-080-0180</li>
                    <li><i class=\"fa fa-map-signs fa-lg fa-li\"></i> 123 Premium Studio, Thamine Street, Digital Estate</li>
                    <li><i class=\"fa fa-envelope fa-lg fa-li\"></i> <a href=\"mailto:info@company.com\">info@company.com</a></li>
                </ul>
                <br><br>
            </div>

            <div class=\"col-md-5 col-sm-6\">
                ";
        // line 39
        echo "                
                ";
        // line 40
        if ((isset($context["result"]) ? $context["result"] : null)) {
            // line 41
            echo "                    <span class=\"lead\">
                        <span class=\"label label-success\">";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : null), "html", null, true);
            echo "</span>
                    </span>
                ";
        } else {
            // line 45
            echo "                    <span class=\"text-muted\">
                        <!-- nothing -->
                    </span>
                ";
        }
        // line 49
        echo "                
                <div class=\"contact-form\">
                    <form method=\"post\" data-request=\"onSend\" name=\"contactform\" id=\"contactform\">
                        <p>
                            <input name=\"name\" type=\"text\" id=\"name\" placeholder=\"Quý danh\">
                        </p>
                        <p>
                            <input name=\"email\" type=\"text\" id=\"email\" placeholder=\"Địa chỉ thư điện tử\">
                        </p>
                        <p>
                            <input name=\"subject\" type=\"text\" id=\"subject\" placeholder=\"Tiêu đề\">
                        </p>
                        <p>
                            <textarea name=\"comments\" id=\"comments\" placeholder=\"Nội dung tin nhắn. Đừng quên gửi kèm thông tin liên lạc của bạn nhé\"></textarea>
                        </p>
                        <button type=\"submit\" class=\"mainBtn\" id=\"submit\"><i class=\"fa fa-send\"></i> Gửi tin nhắn</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/hello-october/themes/martin-flex/partials/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 49,  75 => 45,  69 => 42,  66 => 41,  64 => 40,  61 => 39,  49 => 26,  47 => 25,  45 => 24,  43 => 23,  41 => 22,  19 => 1,);
    }
}
/* <div class="content-section" id="contact">*/
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*             <div class="heading-section col-md-12 text-center">*/
/*                 <h2>Liên hệ</h2>*/
/*                 <p>Hãy gửi tin nhắn cho chúng tôi</p>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                <div class="googlemap-wrapper">*/
/*                     <div id="map_canvas" class="map-canvas"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="row">*/
/*             <div class="col-md-7 col-sm-6">*/
/*                 {#<p>#}*/
/*                 {#    <a rel="nofollow" href="http://www.templatemo.com/free-website-templates/406-flex" target="_parent">Flex</a> is free responsive HTML5 template by <span class="blue">template</span><span class="green">mo</span> that can be used for any commercial or personal website. Slider images and portfolio images are from <a rel="nofollow" href="http://unsplash.com">Unsplash</a> website. Duis ullamcorper tortor tellus. Ut diam libero, ultricies non augue a, mollis congue risus. Fusce a quam eget nisi luctus imperdiet. Aenean semper erat neque. Nunc et scelerisque nunc, in adipiscing magna. Phasellus in erat non tellus molestie sagittis sed a justo. Nam vehicula volutpat nibh, in posuere dolor dictum sit amet.#}*/
/*                 {#    <br><br>#}*/
/*                 {#    Consectetur quod at aperiam corporis totam. Nesciunt minima laborum sapiente totam facere unde est cum quia. Hic, suscipit, praesentium earum quod ea distinctio impedit ullam deserunt minus dolore quibusdam quis saepe aliquam doloribus voluptatibus eum excepturi.#}*/
/*                 {#</p>#}*/
/*                 <ul class="contact-info fa-ul">*/
/*                     <li><i class="fa fa-lg fa-li"></i> <strong>Công ty TNHH Hoàng Gia Ân</strong></li>*/
/*                     <li><i class="fa fa-phone fa-lg fa-li"></i> 010-080-0180</li>*/
/*                     <li><i class="fa fa-map-signs fa-lg fa-li"></i> 123 Premium Studio, Thamine Street, Digital Estate</li>*/
/*                     <li><i class="fa fa-envelope fa-lg fa-li"></i> <a href="mailto:info@company.com">info@company.com</a></li>*/
/*                 </ul>*/
/*                 <br><br>*/
/*             </div>*/
/* */
/*             <div class="col-md-5 col-sm-6">*/
/*                 {#<div class="panel-footer" id="result">*/
/*                     {% partial "aanvraagresult" %}*/
/*                 </div>#}*/
/*                 */
/*                 {% if result %}*/
/*                     <span class="lead">*/
/*                         <span class="label label-success">{{ result }}</span>*/
/*                     </span>*/
/*                 {% else %}*/
/*                     <span class="text-muted">*/
/*                         <!-- nothing -->*/
/*                     </span>*/
/*                 {% endif %}*/
/*                 */
/*                 <div class="contact-form">*/
/*                     <form method="post" data-request="onSend" name="contactform" id="contactform">*/
/*                         <p>*/
/*                             <input name="name" type="text" id="name" placeholder="Quý danh">*/
/*                         </p>*/
/*                         <p>*/
/*                             <input name="email" type="text" id="email" placeholder="Địa chỉ thư điện tử">*/
/*                         </p>*/
/*                         <p>*/
/*                             <input name="subject" type="text" id="subject" placeholder="Tiêu đề">*/
/*                         </p>*/
/*                         <p>*/
/*                             <textarea name="comments" id="comments" placeholder="Nội dung tin nhắn. Đừng quên gửi kèm thông tin liên lạc của bạn nhé"></textarea>*/
/*                         </p>*/
/*                         <button type="submit" class="mainBtn" id="submit"><i class="fa fa-send"></i> Gửi tin nhắn</button>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
