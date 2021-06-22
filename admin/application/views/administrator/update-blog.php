           <div class="page-header">
                <div class="page-header-title">
                    <h4><?php echo $title; ?></h4>
                </div>
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-2.html">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <?php //print_r($viewBlogComments); ?>
                        <li class="breadcrumb-item"><a href="<?php echo site_url();?>administrator/add/blog">Add Blogs</a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?php echo site_url();?>administrator/blogs/list-blog">List Blogs</a>
                        </li>
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
                                    <?php echo form_open_multipart('administrator/blogs/update-blog'); ?>
                                <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
                                </div>
                                
                                <div class="form-group">
                                    <label for="title">Current Blog Image</label>
                                    <div class="d-flex flex-row">
                                    <div class="col-6">
                                         <img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>" class="img-fluid img-thumbnail" width="200px">
                                         <input type="hidden" name="post_thumbnail_old_img" value="<?php echo $post['post_image']; ?>">
                                    </div>
                                    <div class="col-6">
                                        <label for="title">Current Banner Image</label>
                                        <div class="d-flex flex-row">
                                         <img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_banner']; ?>" class="img-fluid img-thumbnail" width="200px">
                                         <input type="hidden" name="post_banner_old_img" value="<?php echo $post['post_banner']; ?>">
                                    </div>
                                    </div>
                                </div>
                            </div>                           
                                
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="Image">Change Thumbnail Image</label>
                                        <input type="file" class="form-control" name="userfile" size="20">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Image">Change Post Banner Image</label>
                                        <input type="file" class="form-control" name="userfiledetail" size="20">
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                        <label for="category">Post Category</label>
                                            <select name="category_id" class="form-control">
                                            <?php foreach ($categories as $category): ?>
                                              <option value="<?php echo $category['id']; ?>" <?php if($post["category_id"] == $category['id']) { echo "selected"; } ?>><?php echo $category['name']; ?></option>
                                            <?php endforeach; ?>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                          <label for="author">Author</label>
                                          <select name="author" class="form-control">                                       
                                            <?php foreach ($author as $author): ?>                                         
                                              <option value="<?php echo $author['id'] ?>" <?php if($author['id'] == $post['user_id']){ echo 'selected="selected"'; } ?>><?php echo $author['name']?> </option>
                                            <?php endforeach; ?>
                                          </select>
                                          <?php echo form_error('author', '<div class="error text-danger">', '</div>'); ?>
                                        </div>
                                 
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputAddress2">Body</label>
                                    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"><?php echo $post['body']; ?></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputAddress2">Meta Title</label>
                                    <input type="text" class="form-control" name="metatitle" placeholder="Add Meta Title" value="<?php echo $post['meta_title']; ?>" size="50">
                                    <?php echo form_error('metatitle', '<div class="error text-danger">', '</div>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress2">Meta Description</label>
                                    <textarea  class="form-control" name="metaDescription" placeholder="Add Meta Description" rows="5" maxlength="600"><?php echo $post['meta_desc']; ?></textarea>
                                    <?php echo form_error('metaDescription', '<div class="error text-danger">', '</div>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress2">Meta Keywords</label>
                                    <input type="text" class="form-control" name="metakeywords" placeholder="Add Meta Keywords" value="<?php echo $post['keywords']; ?>" size="50" data-role="tagsinput">
                                    <?php echo form_error('metakeywords', '<div class="error text-danger">', '</div>'); ?>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label class="col-form-label"><input type="checkbox" value="1" name="feature" class="js-single"
                                    <?php if($post['feature'] == '1'){ echo "checked"; } ?> />&nbsp;Want To Make Featured Articles?</label>
                                </div>

                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                      
                                  </div>
                                  <div class="col-md-4">
                                      <?php echo form_open_multipart('',array('id'=>'upload_form'));?>
                                        <div class="form-group">
                                          <label for="title" class="col-sm-3 control-label">Title Title</label>
                                          <input type="text" name="title" id="title" class="form-control" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="firstName" class="col-sm-3 control-label">Images</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="images" class="form-control" name="userfile">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-9 col-sm-offset-3">
                                                <button type="submit" class="btn btn-primary btn-block" id="upload">upload Image/s</button>
                                            </div>
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