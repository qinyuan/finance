function postFilter(key, value) {
  var href = $('#changePageHref').val();
  location.href = href + "?" + key + "=" + value;
}

(function() {
  function decorateTable() {
    var thickBorder = "4px solid black";
    var thinBorder = "1px solid darkgray";
    $('table.nor').css({
      "borderTop" : thickBorder,
      "borderBottom" : thickBorder,
      "borderCollapse" : "collapse",
      "margin" : "5px"
    });
    $('table.nor th').css({
      "borderBottom" : "2px solid black",
      "borderLeft" : thinBorder,
      "borderRight" : thinBorder,
      "padding" : "4px"
    });
    $('table.nor td').css({
      "border" : thinBorder,
      "padding" : "4px"
    });
    $('table.nor tr:nth-child(even)').css({
      "backgroundColor" : "lightgray"
    });

    var bgColor = null;
    $('table.nor tr').hover(function() {
      bgColor = String(this.style.backgroundColor);
      this.style.backgroundColor = "yellow";
    }, function() {
      if (bgColor != null) {
        this.style.backgroundColor = bgColor;
      }
    });
  }

  function decorateHandleImages() {
    $('td.handle img').hover(function() {
      $(this).css('border-color', '#00ee00');
    }, function() {
      $(this).css('border-color', 'transparent');
    });
  }

  function setPageNumberSelectEvent() {
    $('#pageNumSelect').change(function() {
      postFilter('pageNum', this.value);
    });
  }

  function focusFirstInputText() {
    var $form = $('form');
    if ($form.size() > 0) {
      $form.find('input:text').eq(0).focus();
    }
  }

  function setExitEvents() {
    $('div.exit a').hover(function() {
      $(this).parent().css('background-color', 'black');
      $(this).css({
        'color' : 'white',
        'text-decoration' : 'none',
        'font-weight' : 'bold'
      });
    }, function() {
      $(this).parent().css('background-color', 'transparent');
      $(this).css({
        'color' : 'black',
        'text-decoration' : 'underline',
        'font-weight' : 'normal'
      });
    });
  }

  function setEditPasswordEvents() {
    $('#editPassword').click(function() {
      var tpl = $.trim(parseTemplate("passwordEditForm", {}));
      $(tpl).appendTo('div.body').fadeIn(500, function() {
        $(this).find('input').eq(0).focus();
      });
    });
  }

  function setFloatInputCancelEvents() {
    $('div.floatInput button[id$="Cancel"]').click(function() {
      $('div.floatInput').hide();
    });
  }

  setPageNumberSelectEvent();
  setExitEvents();
  setEditPasswordEvents();
  decorateTable();
  decorateHandleImages();
  focusFirstInputText();
  setFloatInputCancelEvents();
})();

function resetPassword() {
  var $oldPassword = $('#oldPassword');
  var $newPassword1 = $('#newPassword1');
  var $newPassword2 = $('#newPassword2');
  var oldPassword = $oldPassword.val();
  var newPassword1 = $newPassword1.val();
  var newPassword2 = $newPassword2.val();

  if ($.trim(newPassword1) === '') {
    alert('密码不能为空');
    $newPassword1.focus();
  } else if (newPassword1 !== newPassword2) {
    alert("两次输入的密码不一致");
    $newPassword1.select();
  } else {
    $.post('edit-password.php', {
      'oldPassword' : oldPassword,
      'newPassword' : newPassword1
    }, function(data) {
      data = $.trim(data);
      if (data === '0') {
        alert('旧密码输入错误');
        $oldPassword.select();
      } else if (data === '1') {
        alert('密码修改成功');
        location.href = "index.php";
      }
    });
  }
}

function cancelResetPassword() {
  $('div.editPassword').remove();
}

function parseTemplate(templateId, data) {
  var tplHTML = document.getElementById(templateId).innerHTML;
  var smart = new jSmart(tplHTML);
  return smart.fetch(data);
}

function postForm($parent, href, callback) {
  function addParameters() {
    obj[this.id] = this.value;
  }

  var obj = {};
  $parent.find('input[id]').each(addParameters);
  $parent.find('select[id]').each(addParameters);
  $.post(href, obj, callback);
}

function getToday() {
  var date = new Date();
  var year = date.getFullYear();
  var month = date.getMonth() + 1;
  var day = date.getDate();
  if (month < 10) {
    month = '0' + month;
  }
  if (day < 10) {
    day = '0' + day;
  }
  return year + '-' + month + '-' + day;
}

function showActionResult(data) {
  if (data.match(/^success:.*$/)) {
    location.reload();
  } else if (data.match(/^error:.*$/)) {
    alert(data.replace(/^error:/, ''));
  } else {
    console.log(data);
    alert("未知错误");
  }
}