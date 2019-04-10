                            <div class="panel panel-default col-xs-12">
                                <!--<div class="panel-head">
                                    Filter items
                                </div>-->
                                <div class="panel-body">
                                  <div class="title1">Filter items</div>
                                  <p>
                                    <div class="select-rarity-label">
                                <label class="label" for="filter">Select rarity</label>
                            </div>
                            <div class="select-type-label hidden-xs">
                                <label class="label " for="filter1" style="top:0;">Select type</label>
                            </div>
                            <div class="select select-rarity-box">
                                <select id="filter">
                                    <optgroup label="Select rarity">
                                        <option value="" selected="">
                                            None
                                        </option>
                                        <option value="rl-items-item-rare">
                                            Rare
                                        </option>
                                        <option value="rl-items-item-exotic">
                                            Exotic
                                        </option>
                                        <option value="rl-items-item-import">
                                            Import
                                        </option>
                                        <option value="rl-items-item-limited">
                                            Limited
                                        </option>
                                        <option value="rl-items-item-very-rare">
                                            Very Rare
                                        </option>
                                        <option value="rl-items-item-black-market">
                                            Black Market
                                        </option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="visible-xs">
                                <label class="label " for="filter1" style="top:0;">Select type</label>
                            </div>
                            <div class="select select-type-box">
                                <select id="filter1">
                                    <optgroup label="What kind of item?">
                                        <option value="" selected="">
                                            None
                                        </option>
                                        <option value="cars">
                                            Cars
                                        </option>
                                        <option value="boost">
                                            Boost
                                        </option>
                                        <option value="beta">
                                            Beta items
                                        </option>
                                        <option value="crates">
                                            Crates
                                        </option>
                                        <option value="trail">
                                            Trails
                                        </option>
                                        <option value="explosion">
                                            Goal explosions
                                        </option>
                                        <option value="black_market">
                                            Mystery
                                        </option>
                                        <option value="rlcs">
                                            RLCS
                                        </option>
                                        <option value="wheels">
                                            Wheels
                                        </option>
                                    </optgroup>

                                </select>
                            </div>
                            <style>
                                input { font-family: 'FontAwesome', 'Muli', sans-serif;; } /* This is for the placeholder */
                            </style>
                            <div class="col-sm-6" style="padding:0;">
                                <input class="field" id="search" placeholder=" Search for an item..." type="text">
                            </div>
                            <br>
                            <div class="col-sm-6" style="padding:0;">
                                <a href="" class="refresh btn-dark link-normal" onclick=""><i class="fa fa-filter" aria-hidden="true"></i> Clear filters</a>
                            </div>
                        </div>
                      </div>
