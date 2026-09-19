$userModel = new \App\Models\UserModel();
$taskModel = new \App\Models\TaskModel();

$tasks = $taskModel
    ->where('user_id', $userId)
    ->findAll();