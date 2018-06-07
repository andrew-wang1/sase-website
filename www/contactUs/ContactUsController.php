<?php
/**
 * Created by IntelliJ IDEA.
 * User: mzhang
 * Date: 6/7/2018
 * Time: 11:27 AM
 */
require_once("../tools/Controller.php");

class ContactUsController extends Controller {
    const VIEWTITLE = "ContactUs";

    public function __construct(){
        parent::__construct();
    }
    public function display(){
        $viewFile = self::VIEWTITLE . "/index.html";
        include_once($viewFile);
    }
}