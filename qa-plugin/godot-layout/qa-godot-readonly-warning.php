<?php

class qa_godot_readonly_warning
{
        public function allow_template($template)
        {
                return true;
        }


        public function allow_region($region)
        {
                return true;
        }

        public function output_widget($region, $place, $themeobject, $template, $request, $qa_content)
        {
                $themeobject->output('<div style="background-color: #fecaca;border: 3px solid #991b1b;border-radius: 6px;color: #991b1b;padding: 2px 16px;">');
                $themeobject->output('<h3 style="font-size: 115%;font-weight: 600;">The Godot Q&A is currently undergoing maintenance!</h3>');
                $themeobject->output('<p>Your ability to ask and answer questions is temporarily disabled. You can browse existing threads in read-only mode.</p>');
                $themeobject->output('<p>We are working on bringing this community platform back to its full functionality, stay tuned for updates.</p>');
                $themeobject->output('<p><a href="https://godotengine.org" style="color: #337ab7 !important;">godotengine.org</a> | <a href="https://twitter.com/godotengine" style="color: #337ab7 !important;">Twitter</a></p>');
                $themeobject->output('</div>');
        }
}
