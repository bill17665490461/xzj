<?php /*a:1:{s:57:"E:\phpstudy\WWW\xzj\application\admin\view\inputItem.html";i:1536561739;}*/ ?>
<style>
    .configImage,.configFile{min-height:100px; padding-bottom: 20px; }
    .configFile .dz-thumbnail{display:none}
    .dz-default.dz-message{
        right: auto;
        left: 50%;
        top: 25px;
        transform: none;
        padding-left: 0;
        font-size: 35px;
        font-weight: 400;
        line-height: 35px;
        position: relative
    }
    .edui-default * {color:#333}
</style>

<?php if(is_array($fieldList) || $fieldList instanceof \think\Collection || $fieldList instanceof \think\Paginator): $i = 0; $__LIST__ = $fieldList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(!isset($vo['ifeditable'])||$vo['ifeditable']): switch($vo['type']): case "hidden": if($vo['value']): ?><input type="hidden" class="form-control" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]"  value="<?php echo htmlentities($vo['value']); ?>"><?php endif; break; case "text": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <input type="text" class="form-control" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" placeholder="请输入<?php echo htmlentities($vo['title']); ?>" value="<?php echo htmlentities($vo['value']); ?>">
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
</fieldset>
<?php break; case "textarea": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <textarea class="form-control" rows="5" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" placeholder="请输入<?php echo htmlentities($vo['title']); ?>"><?php echo htmlentities($vo['value']); ?></textarea>
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
</fieldset>
<?php break; case "checkbox": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <?php if(is_array($vo['options']) || $vo['options'] instanceof \think\Collection || $vo['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <label class="custom-control custom-checkbox checkbox-inline">
        <input type="checkbox" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>][]" class="custom-control-input" value="<?php echo htmlentities($key); ?>" <?php if(in_array($key,$vo['value'])): ?>checked=''<?php endif; ?>>
               <span class="custom-control-indicator"></span><?php echo htmlentities($v); ?>
    </label>
    <?php endforeach; endif; else: echo "" ;endif; if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
</fieldset>
<?php break; case "radio": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <?php if(is_array($vo['options']) || $vo['options'] instanceof \think\Collection || $vo['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <label class="custom-control custom-radio radio-inline">
        <input type="radio" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" class="custom-control-input" value="<?php echo htmlentities($key); ?>" <?php if($key==$vo ['value']): ?>checked=''<?php endif; ?>>
               <span class="custom-control-indicator"></span><?php echo htmlentities($v); ?>
    </label>
    <?php endforeach; endif; else: echo "" ;endif; if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
</fieldset>
<?php break; case "switch": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <label for="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" class="switcher switcher-primary">
        <input type="checkbox" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" value="1" id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" <?php if(1==$vo['value']): ?>checked=''<?php endif; ?>>
        <div class="switcher-indicator">
            <div class="switcher-yes">开</div>
            <div class="switcher-no">关</div>
        </div>
        &nbsp;
    </label>
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
</fieldset>
<?php break; case "array": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <textarea class="form-control" rows="5" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" placeholder="<?php echo htmlentities($vo['title']); ?>"><?php echo htmlentities($vo['value']); ?></textarea>
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
</fieldset>
<?php break; case "select": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    
    <!-- <?php if($vo['name'] == 'province'): ?>
        <fieldset class="form-inline">
            <label style="clear:both; display: block"></label>
            <div id="distpicker">
                <div class="form-group">
                  <label class="sr-only" for="province">Province</label>
                  <select class="form-control" data-province="<?php echo area($article['province']); ?>" id="province" name="province"></select>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="city" >City</label>
                  <select class="form-control"  data-city="<?php echo area($article['city']); ?>" id="city" name="city"></select>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="district">District</label>
                  <select class="form-control" data-district="<?php echo area($article['district']); ?>" id="district" name="district"></select>
                </div>
            </div>
            <script>
                $("#distpicker").distpicker({
                  autoSelect: false
                });
            </script>
        </fieldset>
    
    <?php else: ?>
    <select name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" class="form-control">
        <?php if(is_array($vo['options']) || $vo['options'] instanceof \think\Collection || $vo['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <option value="<?php echo htmlentities($key); ?>"  <?php if($key==$vo['value']): ?>selected<?php endif; ?>><?php echo htmlentities($v); ?></option>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </select>
    <?php endif; ?> -->
    <select name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" class="form-control">
        <?php if(is_array($vo['options']) || $vo['options'] instanceof \think\Collection || $vo['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <option value="<?php echo htmlentities($key); ?>"  <?php if($key==$vo['value']): ?>selected<?php endif; ?>><?php echo htmlentities($v); ?></option>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </select>
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
</fieldset>
<?php break; case "image": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <input type="hidden" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]"  value="<?php echo htmlentities($vo['value']); ?>" >
    <div id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" class="configImage b-a-2 border-default" >
         <div class="dz-default dz-message text-light">
            <i class="fa fa-plus"></i>
        </div>
    </div>
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
    <script>
        $(function () {
            var thisdom = $('#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>');
            var inputdom = thisdom.prev('input');
            var nowPicid=inputdom.val();
            
            var files={};
            if(''!=inputdom.val()){
                
                     $.ajax({
                            url : "<?php echo url('/member/filemanage/ajaxGetFileInfo'); ?>",
                            type : 'post',
                            dataType: "json",
                            async: false,
                            data : {ids: nowPicid},
                            success : function(data){
                                
                               if (''!=data) {
                                  files=data;
                               }
                            }
                     });
            }
            thisdom.dropzone({
                url: "<?php echo url('filemanage/upload',$vo['param']); ?>",
                dictRemoveFile: "删除图片",
                init: function () {
                    //回调已上传图片
                     if (!jQuery.isEmptyObject(files)) {
                        var mockFile = {
                            name: files.name,
                            size: files.size,
                            accepted: true,
                            status: 'success',
                            processing: false
                        };
                        this.options.addedfile.call(this, mockFile);
                        this.options.thumbnail.call(this, mockFile, '/public/uploads/'+files.path);
                        this.files[0] = mockFile;
                        delImgEvent(thisdom);
                    }
                },
                resize: function (file) {
                    return {
                        srcX: 0,
                        srcY: 0,
                        srcWidth: file.width,
                        srcHeight: file.height,
                        trgWidth: file.width,
                        trgHeight: file.height
                    };
                },
                maxFiles: 1,
                maxfilesexceeded: function (file) {
                    this.removeAllFiles();
                    this.addFile(file);
                },
                success: function (file, response, e) {
                    //移除当前图片  
//                thisdom.find('div.dz-preview:not(.dz-processing)').remove();
                    if (response.status == 1) {
                        inputdom.attr('value', response.id);
                        delImgEvent(thisdom);
                        toastr['success'](response.info, '', {
                            closeButton: true
                        });
                    } else {
                        var data = response.info;
                        if (!data) {
                            data = '未知错误：' + response;
                        }
                        toastr['error'](data, '', {
                            closeButton: true
                        });
                        //移除当前图片恢复之前图片
                        this.removeFile(file);
                         if (!jQuery.isEmptyObject(files)) {
                            var mockFile = {
                                  name: files.name,
                                  size: files.size,
                                  accepted: true,
                                  status: 'success',
                                  processing: false
                            };
                            this.options.addedfile.call(this, mockFile);
                            this.options.thumbnail.call(this, mockFile, '/public/uploads/'+files.path);
                            this.files[0] = mockFile;
                            delImgEvent(thisdom);
                        }
                    }
                }
            });
            function delImgEvent(dom) {
                dom.find('.dz-remove').click(function () {
                    bootbox.confirm({
                        message: '只从这里删除,但仍然保留在服务器中？',
                        className: 'bootbox-sm',
                        buttons: {
                               confirm: {
                                    label: '是的',
                                    className: 'btn-success'
                                },
                                cancel: {
                                    label: '从服务器删除',
                                    className: 'btn-default'
                                }
                        },
                        callback: function (result) {
                            if (!result) {
                                var id = inputdom.attr('value');
                                $.get("<?php echo url('filemanage/delete'); ?>", {id: id},
                                        function (data) {
                                            if (data === 'true') {
                                                toastr['success']('图片删除成功~', '', {
                                                    closeButton: true
                                                });
                                            } else {
                                                toastr['error'](data, '', {
                                                    closeButton: true
                                                });
                                            }
                                        },
                                        "text"
                                        );
                            }
                            inputdom.attr('value','');
                        }
                    });
                });
            }
        });
    </script>
</fieldset>
<?php break; case "images": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <input type="hidden" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]"  value="<?php echo htmlentities($vo['value']); ?>" >
    <div id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" class="configImage b-a-2 border-default" >
        <div class="dz-default dz-message text-light ">
            <i class="fa fa-plus-circle"></i>
        </div>
    </div>
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
    <script>
        $(function () {
            var thisdom = $('#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>');
            var inputdom = thisdom.prev('input');
            var nowPicid=inputdom.val();
            var files={};
            if(''!=nowPicid){

                    $.ajax({
                            url : "<?php echo url('filemanage/ajaxgetfileinfo'); ?>",
                            type : 'post',
                            dataType: "json",
                            async: false,
                            data : {ids: nowPicid},
                            success : function(data){
                               if (''!=data) {
                                  files=data;
                               }
                            }
                     });
            }
            
            thisdom.dropzone({
                url: "<?php echo url('filemanage/upload',$vo['param']); ?>",
                dictRemoveFile: "删除图片",
                init: function () {
                    var mockFile = {};
                    //回调已上传图片
                    if (!jQuery.isEmptyObject(files)) {
                        var n = 0;
                        for (var i in files) {
                            mockFile = {
                                name: files[i].name,
                                size: files[i].size,
                                status: 'success',
                                processing: false,
                                accepted: true,
                            };
                            this.options.addedfile.call(this, mockFile);
                            this.options.thumbnail.call(this, mockFile, '/public/uploads/' + files[i].path);
                            this.files[n] = mockFile;
                            //增加图片id属性用于删除
                            mockFile.previewElement.id = files[i].id;
                            n++;
                        }
                    }
                    //移除文件时清空图片id
                    this.on("removedfile", function (file) {
                        if(file.previewElement.id){
                        var nowids = inputdom.attr('value');
                        var nowidArr = nowids.split(",");
                        nowids = '';
                        for (var i = 0; i < nowidArr.length; i++) {
                            if (nowidArr[i] != file.previewElement.id && nowidArr[i] != '') {
                                nowids += nowidArr[i] + ',';
                            }
                        }
                        inputdom.attr('value', nowids);
                        bootbox.confirm({
                             message: '只从这里删除,但仍然保留在服务器中？',
                             className: 'bootbox-sm',
                             buttons: {
                               confirm: {
                                    label: '是的',
                                    className: 'btn-success'
                                },
                                cancel: {
                                    label: '从服务器删除',
                                    className: 'btn-default'
                                }
                             },
                            callback: function (result) {
                                if (!result) {
                                    $.get("<?php echo url('filemanage/delete'); ?>", {id: file.previewElement.id},
                                            function (data) {
                                                if (data === 'true') {
                                                    toastr['success']('图片删除成功~', '', {
                                                        closeButton: true
                                                    });
                                                } else {
                                                    toastr['error'](data, '', {
                                                        closeButton: true
                                                    });
                                                }
                                            },
                                            "text"
                                            );
                                }
                            }
                        });
                    }
                    });
                },
                resize: function (file) {
                    return {
                        srcX: 0,
                        srcY: 0,
                        srcWidth: file.width,
                        srcHeight: file.height,
                        trgWidth: file.width,
                        trgHeight: file.height
                    };
                },
                success: function (file, response, e) {
                    if (response.status == 1) {
                        var nowids = inputdom.attr('value');
                        inputdom.attr('value', nowids + response.id + ',');
                        //增加图片id属性
                        file.previewElement.id = response.id;
                        toastr['success'](response.info, '', {
                            closeButton: true
                        });
                    } else {
                        var data = response.info;
                        if (!data) {
                            data = '未知错误：' + response;
                        }
                        toastr['error'](data, '', {
                            closeButton: true
                        });
                        this.removeFile(file);
                    }
                }
            });
        });
    </script>
</fieldset>
<?php break; case "files": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <input type="hidden" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]"  value="<?php echo htmlentities($vo['value']); ?>" >
    <div id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" class="configFile b-a-2 border-default" >
        <div class="dz-default dz-message text-light ">
            <i class="fa fa-plus-circle"></i>
        </div>
    </div>
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
    <script>
        $(function () {
            var thisdom = $('#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>');
            var inputdom = thisdom.prev('input');
            var nowPicid=inputdom.val();
            var files={};
            if(''!=nowPicid){
                     $.ajax({
                            url : "<?php echo url('filemanage/ajaxgetfileinfo'); ?>",
                            type : 'post',
                            dataType: "json",
                            async: false,
                            data : {ids: nowPicid},
                            success : function(data){
                               if (''!=data) {
                                  files=data;
                               }
                            }
                     });
            }
            thisdom.dropzone({
                url: "<?php echo url('filemanage/upload',$vo['param']); ?>",
                dictRemoveFile: "删除文件",
                init: function () {
                    var mockFile = {};
                    //回调已上传文件
                    if (!jQuery.isEmptyObject(files)) {
                        var n = 0;
                        for (var i in files) {
                            mockFile = {
                                name: files[i].name,
                                size: files[i].size,
                                status: 'success',
                                processing: false,
                                accepted: true,
                            };
                            this.options.addedfile.call(this, mockFile);
                            this.files[n] = mockFile;
                            //增加图片id属性用于删除
                            mockFile.previewElement.id = files[i].id;
                            n++;
                        }
                    }
                    //移除文件时清空图片id
                    this.on("removedfile", function (file) {
                        if(file.previewElement.id){
                        var nowids = inputdom.attr('value');
                        var nowidArr = nowids.split(",");
                        nowids = '';
                        for (var i = 0; i < nowidArr.length; i++) {
                            if (nowidArr[i] != file.previewElement.id && nowidArr[i] != '') {
                                nowids += nowidArr[i] + ',';
                            }
                        }
                        inputdom.attr('value', nowids);
                        bootbox.confirm({
                            message: '只从这里删除,但仍然保留在服务器中？',
                             className: 'bootbox-sm',
                             buttons: {
                               confirm: {
                                    label: '是的',
                                    className: 'btn-success'
                                },
                                cancel: {
                                    label: '从服务器删除',
                                    className: 'btn-default'
                                }
                             },
                            callback: function (result) {
                                if (!result) {
                                    $.get("<?php echo url('filemanage/delete'); ?>", {id: file.previewElement.id},
                                            function (data) {
                                                if (data === 'true') {
                                                    toastr['success']('文件删除成功~', '', {
                                                        closeButton: true
                                                    });
                                                } else {
                                                    toastr['error'](data, '', {
                                                        closeButton: true
                                                    });
                                                }
                                            },
                                            "text"
                                            );
                                }
                            }
                        });
                        }
                    });
                },
                success: function (file, response, e) {
                    if (response.status == 1) {
                        var nowids = inputdom.attr('value');
                        inputdom.attr('value', nowids + response.id + ',');
                        //增加图片id属性
                        file.previewElement.id = response.id;
                        toastr['success'](response.info, '', {
                            closeButton: true
                        });
                    } else {
                        var data = response.info;
                        if (!data) {
                            data = '未知错误：' + response;
                        }
                        toastr['error'](data, '', {
                            closeButton: true
                        });
                        this.removeFile(file);
                    }
                }
            });
        });
    </script>
</fieldset>
<?php break; case "tags": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <input id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" type="text" value="<?php echo htmlentities($vo['value']); ?>"  class="form-control select2-primary">
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
    <script>
        $(function () {
            $('#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>').tagsinput({tagClass: 'label label-primary'});
        });
    </script>
</fieldset>
<?php break; case "number": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <input type="number" class="form-control" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" placeholder="请输入<?php echo htmlentities($vo['title']); ?>" value="<?php echo htmlentities($vo['value']); ?>">
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
</fieldset>
<?php break; case "datetime": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <input type="text" class="form-control" id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" placeholder="请输入<?php echo htmlentities($vo['title']); ?>" value="<?php echo htmlentities($vo['value']); ?>">
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
    <script>
        $(function () {
            $('#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                timePicker: true, //是否显示小时和分钟  
                timePickerIncrement: 1, //时间的增量，单位为分钟  
                timePicker12Hour: false, //是否使用12小时制来显示时间  
                locale: {
                    format: 'YYYY-MM-DD HH:mm:ss',
                    daysOfWeek: ['日', '一', '二', '三', '四', '五', '六'],
                    monthNames: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
                    applyLabel: '确定',
                    cancelLabel: '取消',
                    firstDay: 1
                }
            }, function (start, end, label) {
            }).on('cancel.daterangepicker', function () {
                $(this).val('');
            });
        });
    </script>
</fieldset>
<?php break; case "color": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <input type="text" id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" class="form-control" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" value="<?php echo htmlentities($vo['value']); ?>"  placeholder="请选择<?php echo htmlentities($vo['title']); ?>">
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo $vo['remark']; ?></small><?php endif; ?>
</fieldset>
<script>
    $(function () {
        $('#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>').minicolors({
            control: 'hue',
            position: 'bottom left',
        });
    })
</script>
<?php break; case "Ueditor": ?>
<script type="text/javascript">
    if("undefined" == typeof UE){ 
        document.write('<scr'+'ipt type="text/javascript" src="/public/static/ueditor/ueditor.config.js"></sc'+'ript>');
        document.write('<scr'+'ipt type="text/javascript" src="/public/static/ueditor/editor_api.js" data-bind="/public/static/ueditor/_src/"  id="uapi"></sc'+'ript>');
    }
    $(function () {
// 百度编辑器ajax注销
       if("undefined" != typeof ueditid){
           ueditid+='<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>,';
        }
        var <?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?> = UE.getEditor('<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>', {
            initialFrameWidth: null,
            initialFrameHeight: 250,
            serverUrl: "<?php echo url('filemanage/upload',['module'=>'admin','from'=>'ueditor']); ?>"
        });

        //图片本地化
        $('#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>getimg').click(function(){
    var now=$(this);
    now.addClass('btn-loading');
    var con=<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>.getContent();
    $.post("<?php echo url('filemanage/geturlfile'); ?>", {'content':con,'type':'images'},
    function(data){
        <?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>.setContent(data);
        now.removeClass('btn-loading');
        toastr['success']('图片本地化完成', '', {
                            closeButton: true
                      });
    },'html');
        })
        //标签增加链接
        var num=0;
        $('#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>getlink').click(function(){
    var now=$(this);
    now.addClass('btn-loading');
    var con=<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>.getContent();
    $.post("<?php echo url('tag/gettaglink'); ?>", {'content':con,'mid':<?php if(isset($mid)): ?><?php echo htmlentities($mid); else: ?>0<?php endif; ?>,'num':num},
    function(data){
        <?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>.setContent(data);
        now.removeClass('btn-loading');
        num++;
        toastr['success']('链接添加完成'+num+'次', '', {
                           closeButton: true
                      });
    },'html');
        })
    })
</script>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <script type="text/plain" id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" >
        <?php echo $vo['value']; ?>
    </script>
    <div class="m-t-1">
        <div id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>getimg" class="btn btn-default"><i class="fa fa-image"></i> 图片本地化</div>
        <div id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>getlink" class="btn btn-default"><i class="fa fa-link"></i> 内容TAG链接</div>
    </div>
</fieldset>
<?php break; case "summernote": ?>
<fieldset class="form-group">
    <label style="clear:both; display: block"><?php echo htmlentities($vo['title']); if(isset($vo['ifrequire']) AND $vo['ifrequire']): ?>*<?php endif; ?></label>
    <textarea class="form-control"  id="<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>" name="<?php echo htmlentities($vo['fieldArr']); ?>[<?php echo htmlentities($vo['name']); ?>]" placeholder="请输入<?php echo htmlentities($vo['title']); ?>"><?php echo htmlentities($vo['value']); ?></textarea>
    <?php if($vo['remark']): ?> <small class="text-muted" style="clear:both; display: block"><?php echo htmlentities($vo['remark']); ?></small><?php endif; ?>
</fieldset>
<script>
  $(function() {
      $('#<?php echo htmlentities($vo['fieldArr']); ?><?php echo htmlentities($vo['name']); ?>').summernote({
        height: 200,
        toolbar: [
          ['parastyle', ['style']],
          ['fontstyle', ['fontname', 'fontsize']],
          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
          ['insert', ['picture', 'link', 'video', 'table', 'hr']],
          ['history', ['undo', 'redo']],
          ['misc', ['codeview', 'fullscreen']],
          ['help', ['help']]
        ],
        lang: 'zh-CN'
      });
    });
</script>
<?php break; endswitch; endif; endforeach; endif; else: echo "" ;endif; ?>
