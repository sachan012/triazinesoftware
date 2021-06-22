           <div class="page-header">
                <div class="page-header-title">
                    <h4><?php echo $title; ?></h4>
                </div>
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="icofont icofont-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="<?php echo site_url();?>administrator/add/blog">Add Blogs</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo site_url();?>administrator/blogs/list-blog">List Blogs</a></li>
                    </ul>
                </div>
            </div>
            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Form Inputs card start -->
                        <div class="card">                           
                            <div class="card-block">
                                <div class="row">
                                  <div class="col-md-8">
                                    <?php echo form_open_multipart('administrator/blogs/add-blog'); ?>                            
                                  <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo set_value('title'); ?>" size="50">
                                    <?php echo form_error('title', '<div class="error text-danger">', '</div>'); ?>
                                  </div>
                                  
                                  <div class="row">
                                    <div class="form-group col-md-6">
                                      <label for="Image">Thumbnail Image</label>
                                      <input type="file" class="form-control" name="userfile" value="<?php echo set_value('userfile'); ?>" size="50">
                                      <?php echo form_error('userfile', '<div class="error text-danger">', '</div>'); ?>
                                    </div>

                                    <div class="form-group col-md-6">
                                      <label for="Image">Description page image</label>
                                      <input type="file" class="form-control" name="desc_img" value="<?php echo set_value('desc_img'); ?>" size="50">
                                      <?php echo form_error('desc_img', '<div class="error text-danger">', '</div>'); ?>
                                    </div>
                                    
                                      

                                    <div class="form-group col-md-6">
                                      <label for="category">category</label>
                                      <select name="category_id" class="form-control">                                       
                                        <?php foreach ($categories as $category): ?>                                          
                                          <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                                        <?php endforeach; ?>
                                      </select>
                                      <?php echo form_error('category_id', '<div class="error text-danger">', '</div>'); ?>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                      <label for="author">Author</label>
                                      <select name="author" class="form-control">                                       
                                        <?php foreach ($author as $author): ?>                                          
                                          <option value="<?php echo $author['id']; ?>"><?php echo $author['name']; ?></option>
                                        <?php endforeach; ?>
                                      </select>
                                      <?php echo form_error('author', '<div class="error text-danger">', '</div>'); ?>
                                    </div>
                                    
                                  </div>
                                  
                                  <div class="form-group">
                                    <label for="inputAddress2">Body</label>
                                    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"><?php echo set_value('body'); ?></textarea>
                                    <?php echo form_error('body', '<div class="error text-danger">', '</div>'); ?>
                                  </div> 
                                  
                                  <div class="form-group">
                                    <label for="inputAddress2">Meta Title</label>
                                    <input type="text" class="form-control" name="metatitle" placeholder="Add Meta Title" value="<?php echo set_value('metatitle'); ?>" size="50">
                                    <?php echo form_error('metatitle', '<div class="error text-danger">', '</div>'); ?>
                                  </div>
                
                                  <div class="form-group">
                                    <label for="inputAddress2">Meta Description</label>
                                    <textarea  class="form-control" name="metaDescription" placeholder="Add Meta Description" rows="5" maxlength="600"><?php echo set_value('metaDescription'); ?></textarea>
                                    <?php echo form_error('metaDescription', '<div class="error text-danger">', '</div>'); ?>
                                  </div>
                
                                  <div class="form-group">
                                    <label for="inputAddress2">Meta Keywords</label>
                                    <input type="text" class="form-control" name="metakeywords" placeholder="Add Meta Keywords" value="<?php echo set_value('metakeywords'); ?>" size="50" data-role="tagsinput">
                                    <?php echo form_error('metakeywords', '<div class="error text-danger">', '</div>'); ?>
                                  </div>
                                  
                                  
                                  <div class="form-group">                                       
                                        <div class="col-sm-6">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="feature">
                                            <label class="form-check-label" for="gridCheck1" value="<?php echo set_value('feature'); ?>">Want To Make Featured Articles ?
                                            </label>
                                            <?php echo form_error('feature', '<div class="error text-danger">', '</div>'); ?>
                                          </div>
                                        </div>
                                        <div class="col-sm-6"></div>
                                      </div>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                    <?php echo form_close();?>                                    
                                  </div>
                                  <div class="col-md-4">
                                    <?php echo form_open_multipart('',array('id'=>'upload_form'));?>
                                        <div class="form-group">
                                          <label for="title" class="control-label">Title Title</label>
                                          <input type="text" name="title" id="title" class="form-control" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="firstName" class="control-label">Images</label>
                                            <input type="file" id="images" class="form-control" name="userfile">
                                        </div>
                                         <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block col-sm-6 col-sm-offset-6" id="upload">upload Image</button>
                                        </div>
                                    <?php echo form_close();?> <!-- /form -->                                    
                                    <div id="records_table"></div>

                                  

                                  </div>
                                </div>                                 
                            </div>
                        </div>
                        <!-- Basic Form Inputs card end -->
                    </div>
                </div>
            </div>
            <!-- Page body end -->
        </div>
    </div>