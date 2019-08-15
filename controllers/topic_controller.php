<?php
require_once('controllers/base_controller.php');
require_once('models/topic.php');
require_once('models/trainer.php');

class TopicController extends BaseController
{
  function __construct()
  {
    $this->folder = 'topic';
  }

  public function index()
  {
    $topics = Topic::all();
    $data = array('topics' => $topics);
    $this->render('index', $data);
  }
  public function show()
  {
    $trainers = Trainer::all();
    if(isset($_GET['id'])) $topic = Topic::find($_GET['id']);
    else $topic = Topic::find(-1);
    $data = array('topic' => $topic, 'trainers' => $trainers);
    $this->render('show', $data);
  }
  public function add()
  {
    Topic::add($_POST['name'],$_POST['trainerId'],$_POST['courseId']);
    header("Location: index.php?controller=topic");
  }
  public function update()
  {
    Topic::update($_POST['id'],$_POST['trainerId'],$_POST['courseId'],$_POST['name']);
    header("Location: index.php?controller=topic");
  }
  public function delete()
  {
    Topic::delete($_GET['id']);
    header("Location: index.php?controller=topic");
  }
}