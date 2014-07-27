(function() {
  function showUserForm(buttonIdPrefix, id) {
    function showInputDiv() {
      $inputDiv.fadeIn(500, function() {
        $(this).find('input:text').eq(0).focus();
      });
    }

    var $inputDiv = $('#userFormDiv');
    $inputDiv.find('button').hide();
    $inputDiv.find('button[id^=' + buttonIdPrefix + ']').show();
    if (id) {
      $.post('user-info.php', {
        id : id
      }, function(data) {
        var data = JSON.parse(data);
        $('#userId').val(id);
        $('#username').val(data.name);
        $('#password').val(data.password);
        $('#company').val(data.company);
        $('#hasAddPri').val(data.has_add_pri);
        showInputDiv();
      });
    } else {
      showInputDiv();
    }
  }

  function showAddUserForm() {
    showUserForm("add");
  }

  function validateNameInput() {
    // validate name
    var $username = $('#username');
    var name = $username.val();
    if ($.trim(name) === '') {
      alert("用户名不能为空");
      if (name.length > 0) {
        $username.select();
      } else {
        $username.focus();
      }
      return false;
    } else {
      return true;
    }
  }

  function validatePasswordInput() {
    // validate password
    var $password = $('#password');
    var password = $password.val();
    if ($.trim(password) === '') {
      alert("密码不能为空");
      if (password.length > 0) {
        $password.select();
      } else {
        $password.focus();
      }
      return false;
    } else {
      return true;
    }
  }

  function submitUser(url) {
    if (!validateNameInput()) {
      return;
    }

    if (!validatePasswordInput()) {
      return;
    }

    postForm($('#userFormDiv'), url, function(data) {
      showActionResult(data);
    });
  }

  function addUserSubmit() {
    submitUser("user-add-action.php");
  }

  function editUserSubmit() {
    submitUser("user-edit-action.php");
  }

  function showEditUserForm(id) {
    showUserForm('edit', id);
  }

  function deleteUserSubmit(id) {
    if (confirm("确定删除？")) {
      $.post('user-delete-action.php', {
        id : id
      }, function(data) {
        showActionResult(data);
      });
    }
  }


  $('span.addLink a').click(showAddUserForm);
  $('#addUserOk').click(addUserSubmit);
  $('#editUserOk').click(editUserSubmit);
  $('td.handle').find('img[id^=edit]').click(function() {
    showEditUserForm(this.id.replace('edit', ''));
  });
  $('td.handle').find('img[id^=delete]').click(function() {
    deleteUserSubmit(this.id.replace('delete', ''));
  });
})(); 