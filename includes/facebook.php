<?php
require_once("facebook_php/facebook.php");

  $config = array();
  $config['appId'] = '127031380800607';
  $config['secret'] = '0831c8ed58655d1677ec974898f1dac4';
  $config['fileUpload'] = false; // optional

  // instantiate
    $facebook = new Facebook($config);

    // set page id
    $pageid = "524926377534243";

    // now we can access various parts of the graph, starting with the feed
    $pagefeed = $facebook->api("/" . $pageid . "/feed");
            
            // set counter to 1, because we only want to display 10 posts
            $i = 1;
            foreach($pagefeed['data'] as $post) {
                //  break out of the loop if counter has reached 10
                if ($i > 10) {
                    break;
                } else {
                    
                    if ($post['created_time'] != '') {
                        // Statuses
                        if ($post['type'] == 'status') {
                            if (empty($post['story']) === false) {
                                        ${'status_'.$i} = $post['story'];
                                    } elseif (empty($post['message']) === false) {
                                        ${'status_'.$i} = $post['message'];
                                    }
                            ${'date_'.$i} = date("jS M, Y", strtotime($post['created_time']));
                            ${'status_'.$i} = Truncate(${'status_'.$i}, 80);
                            $i++;
                        }                
                        
                        // Images
                        if ($post['type'] == 'photo') {

                            $photoimage = $facebook->api("/" . $post['object_id']);
                            ${'fbimg_'.$i} = $photoimage['source'];
                           // $face = 'http://api.skybiometry.com/fc/faces/detect.json?api_key=9d9ca45660824a8cae916a549e97ec09&api_secret=db544585cbee49ba85898f179e0de46b&urls='.${'fbimg_'.$i}.'&attributes=all';

                            if (empty($post['story']) === false) {
                                        ${'status_'.$i} = $post['story'];
                                    } elseif (empty($post['message']) === false) {
                                        ${'status_'.$i} = $post['message'];
                                    }
                            ${'date_'.$i} = date("jS M, Y", strtotime($post['created_time']));
                            ${'status_'.$i} = Truncate(${'status_'.$i}, 80);
                            ${'fblink_'.$i} = $post['link'];
                            $i++;
                        }

                        
                    }
                }
            } // end the foreach statement

function Truncate($string, $length, $stopanywhere=false) {
    //truncates a string to a certain char length, stopping on a word if not specified otherwise.
    if (strlen($string) > $length) {
        //limit hit!
        $string = substr($string,0,($length -3));
        if ($stopanywhere) {
            //stop anywhere
            $string .= '...';
        } else{
            //stop on a word.
            $string = substr($string,0,strrpos($string,' ')).'...';
        }
    }
    return $string;
}

?>