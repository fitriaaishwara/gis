<?php

use App\Models\Sliders;
use App\Constant;

function status(){
    return [
        'Valid' => Constant::VALID,
        'Suspend' => Constant::SUSPEND,
        'Withdraw' => Constant::WITHDRAW,
        'Expired' => Constant::EXPIRED,
    ];
}

function roles(){
    return [
        'Super Admin' => Constant::ROLE_SUPER_ADMIN,
        'Admin' => Constant::ROLE_ADMIN,
        'Author' => Constant::ROLE_AUTHOR,
    ];
}

function gallery(){
    return [
        'Team' => Constant::TEAM,
        'Client' => Constant::CLIENT,
        'Event' => Constant::EVENT,
        'Lainnya' => Constant::LAINNYA,
    ];
}

function certif(){
    return [
        'LSUP' => Constant::LSUP,
        'LSPRO' => Constant::LSPRO,
        'ISO' => Constant::ISO,
        'ISPO' => Constant::ISPO,
        'CHSE' => Constant::CHSE,
    ];
}

function br_bookmarks_tagify_json_to_array( $value ) {

    // Because the $value is an array of json objects
    // we need this helper function.

    // First check if is not empty
    if( empty( $value ) ) {

        return $output = array();

    } else {

        // Remove squarebrackets
        $value = str_replace( array('[',']') , '' , $value );

        // Fix escaped double quotes
        $value = str_replace( '\"', "\"" , $value );

        // Create an array of json objects
        $value = explode(',', $value);

        // Let's transform into an array of inputed values
        // Create an array
        $value_array = array();

        // Check if is array and not empty
        if ( is_array($value) && 0 !== count($value) ) {

            foreach ($value as $value_inner) {
                $value_array[] = json_decode( $value_inner );
            }

            // Convert object to array
            // Note: function (array) not working.
            // This is the trick: create a json of the values
            // and then transform back to an array
            $value_array = json_decode(json_encode($value_array), true);

            // Create an array only with the values of the child array
            $output = array();

            foreach($value_array as $value_array_inner) {
                foreach ($value_array_inner as $key=>$val) {
                    $output[] = $val;
                }
            }

        }

        return $output;

    }

}

if (!function_exists('sliderOne')) {

    function applicationSlider_one()
    {
        $sliderOne = Sliders::orderBy("created_at", "DESC")->first()->slider_one;
        return asset("/laravel/public/images/slider/" . $sliderOne);
    }
}

if (!function_exists('sliderTwo')) {

    function applicationSlider_two()
    {
        $sliderTwo = Sliders::orderBy("created_at", "DESC")->first()->slider_two;
        return asset("/laravel/public/images/slider/" . $sliderTwo);
    }
}

if(!function_exists('encrypt_ktp')) {
    /**
     * Encrypt KTP and save as file
     *
     * @param string $input
     * @param string $saveLocation
     * @return void
     */
    function encrypt_ktp($input, $saveFileName = 'encrypted_ktp.txt')
    {
        require_once __DIR__ . "/t_encrypt.php";
        $ktp_scan_folder = public_path("images");
        return t_encrypt::setPassword('huehue')
            -> input($input)
            -> saveAsFile($ktp_scan_folder . DIRECTORY_SEPARATOR . $saveFileName);
    }
}

if(!function_exists('decrypt_ktp_show')) {
    /**
     * Decrypt ktp file
     * and return as random string
     *
     * @param [type] $input
     * @return string
     */
    function decrypt_ktp_show($input)
    {
        require_once __DIR__ . "/t_encrypt.php";
        $ktp_scan_folder = public_path("images");
        $file = $ktp_scan_folder . DIRECTORY_SEPARATOR . $input;
        if (!is_file($file)) {
            // die("File KTP tidak ditemukan");
            return "File KTP tidak ditemukan";
        }

        if (!is_txt_file($file)) {
            // die("File KTP tidak valid, silahkan upload ulang");
            return "File KTP tidak valid, silahkan upload ulang";
        }

        return t_encrypt::setPassword('huehue')
            -> encrypted_string($file)
            -> show();
    }
}

if(!function_exists('decrypt_ktp_print')) {
    /**
     * Decrypt ktp file
     * and return as random string
     *
     * @param string $input
     * @return string
     */
    function decrypt_ktp_print($input)
    {
        require_once __DIR__ . "/t_encrypt.php";
        $ktp_scan_folder = public_path("images");
        $file = $ktp_scan_folder . DIRECTORY_SEPARATOR . $input;
        if (!is_file($file)) {
            // die("File KTP tidak ditemukan");
            return "File KTP tidak ditemukan";
        }

        if (!is_txt_file($file)) {
            // die("File KTP tidak valid, silahkan upload ulang");
            return "File KTP tidak valid, silahkan upload ulang";
        }

        echo t_encrypt::setPassword('huehue')
            -> encrypted_string($file)
            -> print();
    }
}

// helper to determine if file is txt file
if (!function_exists('is_txt_file')) {
    function is_txt_file($file)
    {
        $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
        if ($fileExtension == 'txt') {
            return true;
        }

        return false;
    }
}
