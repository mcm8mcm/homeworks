<?php

    $commentsFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'comments.dat';
    $formDataMsg = '* - required fields';
    $uname = $umail = $umsg = '';
    $formErrors = [];
    if (!empty($_POST)) {
        $formDataMsg .= '<br>' . 'Form data: ' . var_export($_POST, 1) . '<br>';
        if (empty($_POST['uname'])) {
            $formErrors[] = 'Username can`t be empty!';
        } else {
            $uname = $_POST['uname'];
        }
        if (empty($_POST['umail'])) {
            $formErrors[] = 'Email can`t be empty!';
        } else {
            $umail = $_POST['umail'];
        }
        if (!filter_var($_POST['umail'], FILTER_VALIDATE_EMAIL)) {
            $formErrors[] = 'Email has wrong format!';
        }
        if (empty($_POST['umsg'])) {
            $formErrors[] = 'Message can`t be empty!';
        } else {
            $umsg = $_POST['umsg'];
        }
        if (!empty($formErrors)) {
            $formDataMsg .= 'Can`t add your comment because filled form has validation errors: ' . '<br>' . PHP_EOL;
            foreach ($formErrors as $err) {
                $formDataMsg .= $err . '<br>' . PHP_EOL;
            }
            $formDataMsg = '<div class="alert alert-warning fade in">
                        <button class="close" data-dismiss="alert" aria-label="close">&times;</button>
                        <strong>'. $formDataMsg . '</strong>
                    </div>';

        } else {
            $commentData = $_POST;
            $commentData['datetime'] = date('Y-m-d H:i:s');
            addComment($commentData);
            header('Location: ' . $_SERVER['PHP_SELF'] . '?page=contact&commentAdded' . time());
        }
    }

    function addComment($aComm) {
        global $commentsFile;
        $allComments = getComments();
        $allComments[] = $aComm;
        $sAllComm = serialize($allComments);
        file_put_contents($commentsFile, $sAllComm);
    }

    function getComments() {
        global $commentsFile;
        $aComm = [];
        if (file_exists($commentsFile)) {
            $sComm = file_get_contents($commentsFile);
            $aComm = unserialize($sComm);
        }
        return $aComm;
    }

    function filterBadWords($str) {
        $badWords = ['fuck', 'sex', 'sheet'];
        $goodWords = ['f**k', 's*x', 'sh**t'];
        $str = str_ireplace($badWords, $goodWords, $str);
        return $str;
    }

    $userComments = '';
    $aComm = getComments();
    if (!empty($aComm)) {
        foreach ($aComm as $comm) {
            /*
            if (!empty($comm)) {
                $userComments .= '<div class="form-group">' . '<dl>' .
                    '<dl>Username: </dl><dd>' . $comm['uname'] . '</dd>' .
                    '<dl>Email: </dl><dd>' . $comm['umail'] . '</dd>' .
                    '<dl>Message: </dl><dd>' . filterBadWords($comm['umsg']) . '</dd>' .
                    '<dl>Added on: </dl><dd>' . $comm['datetime'] . '</dd>' .
                    '</dl><br>' . '</div>' . PHP_EOL;
            }
            */
            if (!empty($comm)) {
                $userComments .= '<div class="well">' .
                    '<div class="form-group"><label>Username: </label><p>' . $comm['uname'] . '</p></div>' .
                    '<div class="form-group"><label>Email: </label><p>' . $comm['umail'] . '</p></div>' .
                    '<div class="form-group"><label>Message: </label><p>' . filterBadWords($comm['umsg']) . '</p></div>' .
                    '<div class="form-group"><label>Added on: </label><p>' . $comm['datetime'] . '</p></div>' .
                    '<br></div>' . PHP_EOL;
            }

        }
    }

?>

    <div class="row" style="padding-bottom: 70px;">
        <div class="col-lg-offset-1" >
            <div class="well col-lg-10">
                <div class="panel panel-default">
                    <div  class="panel-heading">
                        <h1 style="text-align: center;"><?php echo $pageTitle; ?></h1>
                    </div>

                    <div  class="panel-body">
                        <form action="" method="post">
                            <div class="form-group"><label for="uname">Username *: </label><input class="form-control" id="uname" type="text" name="uname" value="<?php echo $_SESSION['user']; ?>"></div>
                            <div class="form-group"><label for="umail">Email *: </label><input class="form-control" id="umail" type="email" name="umail" value="<?php echo $umail; ?>"></div>
                            <div class="form-group"><label for="umsg">Message *: </label><textarea style="max-width: 100%; width: 100%" class="form-control" id="umsg" name="umsg"><?php echo $umsg; ?></textarea></div>
                            <div class="form-group"><input class="btn btn-success" type="submit" value="Add comment"></div>
                            <div class="form-group"><label style="width: 100%;"><?php echo $formDataMsg; ?></label></div>
                        </form>
                    </div>
                    <hr>
                    <div class="panel panel-default" style="height: 100%; margin: 10px;">
                        <div  class="panel-heading">
                            <h2 style="text-align: center;">Added comments:</h2>
                        </div>
                        <div  class="panel-body">
                            <div><?php echo $userComments; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
