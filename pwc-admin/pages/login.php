
                    <!-- login -->
                    <div class="col-lg-12" style="padding-right: 250px">
                        <form method="post">
                            <h1>Login</h1>
                            <p>
                                <input type="password" name="password" placeholder="Password">
                            </p>
                            <p>
                                <input type="submit" name="submit" value="Submit">
                            </p>
                            
                            <?
                                if (isset($_SESSION["message"])) {
                            ?>
                            <p><i>
                              <?
                              print($_SESSION["message"]);
                              unset($_SESSION["message"]);
                              ?>  
                            </i></p>
                            <?
                                }
                            ?>

                        </form>
                    </div>