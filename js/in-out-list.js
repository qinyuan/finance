(function() {
  function showInputForm(buttonIdPrefix, id) {
    function showInputDiv() {
      if ($.trim($addDate.val()) == '') {
        $addDate.val(getToday());
      }
      $inputDiv.fadeIn(500, function() {
        if ($amount.val() == '') {
          $amount.focus();
        } else {
          $amount.select();
        }
      });
    }


    $inputDiv.find('button').hide();
    $inputDiv.find('button[id^=' + buttonIdPrefix + ']').show();
    if (id) {
      $.post(infoHref, {
        id : id
      }, function(data) {
        var data = JSON.parse(data);
        $inputId.val(id);
        $addDate.val(data.add_date);
        $amount.val(data.amount);
        $description.val(data.description);
        showInputDiv();
      });
    } else {
      showInputDiv();
    }
  }

  function showAddForm() {
    showInputForm("add");
  }

  function validateAmountInput() {
    var amount = $amount.val();
    if ($.trim(amount) == '') {
      alert("金额栏不能为空");
      $amount.focus();
      return false;
    } else if (!$.isNumeric(amount)) {
      alert("金额栏只能输入数字");
      $amount.select();
      return false;
    } else {
      return true;
    }
  }

  function validateDateInput() {
    if ($.trim($addDate.val()) == '') {
      alert("日期不能为空");
      $(addDate.focus());
      return false;
    } else {
      return true;
    }
  }

  function submitInputForm(url) {
    if (!validateDateInput()) {
      return;
    }

    if (!validateAmountInput()) {
      return;
    }

    postForm($inputDiv, url, function(data) {
      showActionResult(data);
    });
  }

  function addSubmit() {
    submitInputForm(addHref);
  }

  function editSubmit() {
    submitInputForm(editHref);
  }

  function changeMonthSubmit() {
    var year = $('#year').val();
    var month = $('#month').val();
    var href = $('#changePageHref').val();
    location.href = href + "?year=" + year + "&month=" + month;
  }

  function showEditForm(id) {
    showInputForm('edit', id);
  }

  function deleteSubmit(id) {
    if (confirm('确定删除？')) {
      $.post(deleteHref, {
        id : id
      }, function(data) {
        showActionResult(data);
      });
    }
  }

  var $addDate = $('#addDate');
  var $amount = $('#amount');
  var $description = $('#description');

  $('#addDate').click(WdatePicker);
  $('span.addLink a').click(showAddForm);
  $addButton.click(addSubmit);
  $editButton.click(editSubmit);
  $('td.handle').find('img[id^=edit]').click(function() {
    showEditForm(this.id.replace('edit', ''));
  });
  $('td.handle').find('img[id^=delete]').click(function() {
    deleteSubmit(this.id.replace('delete', ''));
  });
  $('#changeMonthOk').click(changeMonthSubmit);
})();
