<x-app-layout>
    <div class="my-6 md:my-10">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <ul id="tabs" class="flex space-x-2 text-sm">
                <li class="group">
                    <a data-target="basic" href="javascript:void(0)" class="block rounded-t-lg px-3 py-2 bg-white group-hover:bg-white">常规配置</a>
                </li>
                <li class="group">
                    <a data-target="review" href="javascript:void(0)" class="block rounded-t-lg px-3 py-2 bg-gray-200 group-hover:bg-white">图片审核</a>
                </li>
                <li class="group">
                    <a data-target="protection" href="javascript:void(0)" class="block rounded-t-lg px-3 py-2 bg-gray-200 group-hover:bg-white">原图保护</a>
                </li>
                <li class="group">
                    <a data-target="watermark" href="javascript:void(0)" class="block rounded-t-lg px-3 py-2 bg-gray-200 group-hover:bg-white">水印配置</a>
                </li>
            </ul>
            <form action="{{ route('admin.group.create') }}" method="POST">
                <div class="overflow-hidden rounded-md rounded-l-none">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div data-tab="basic" class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>组名称</label>
                                <input type="text" name="name" id="name" autocomplete="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入组名称">
                            </div>

                            <div class="col-span-6">
                                <label for="maximum_file_size" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>最大文件大小(KB)</label>
                                <input type="number" name="configs[maximum_file_size]" id="maximum_file_size" autocomplete="maximum_file_size" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入上传文件的最大限制，单位kb">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="concurrent_upload_num" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>并发上传数量</label>
                                <input type="number" name="configs[concurrent_upload_num]" id="concurrent_upload_num" autocomplete="concurrent_upload_num" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入并发上传数量">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="limit_per_minute" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>每分钟上传限制</label>
                                <input type="number" name="configs[limit_per_minute]" id="limit_per_minute" autocomplete="limit_per_minute" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入每分钟可以上传的图片数量">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="limit_per_hour" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>每小时上传限制</label>
                                <input type="number" name="configs[limit_per_hour]" id="limit_per_hour" autocomplete="limit_per_hour" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入每小时可以上传的图片数量">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="limit_per_day" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>每天上传限制</label>
                                <input type="number" name="configs[limit_per_day]" id="limit_per_day" autocomplete="limit_per_day" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入每天可以上传的图片数量">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="limit_per_week" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>每周上传限制</label>
                                <input type="number" name="configs[limit_per_week]" id="limit_per_week" autocomplete="limit_per_week" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入每周可以上传的图片数量">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="limit_per_month" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>每月上传限制</label>
                                <input type="number" name="configs[limit_per_month]" id="limit_per_month" autocomplete="limit_per_month" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入每月可以上传的图片数量">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="path_naming_rule" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>路径命名规则</label>
                                <input type="number" name="configs[path_naming_rule]" id="path_naming_rule" autocomplete="path_naming_rule" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入路径命名规则">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="file_naming_rule" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>文件命名规则</label>
                                <input type="number" name="configs[file_naming_rule]" id="file_naming_rule" autocomplete="file_naming_rule" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入文件命名规则">
                            </div>

                            <div class="col-span-6">
                                <x-fieldset title="是否默认" faq="设置默认后，新用户注册以后将会属于该默认角色组。">
                                    <x-switch id="configs[is_default]" name="configs[is_default]" value="1"></x-switch>
                                </x-fieldset>
                            </div>

                            <div class="col-span-6">
                                <x-fieldset title="允许上传的图片类型">
                                    @foreach($extensions as $extension)
                                        <x-fieldset-checkbox id="configs[accepted_file_suffixes]_{{ $extension }}" name="configs[accepted_file_suffixes][]" value="{{ $extension }}" checked>
                                            {{ strtoupper($extension) }}
                                        </x-fieldset-checkbox>
                                    @endforeach
                                </x-fieldset>
                            </div>
                        </div>

                        <div data-tab="review" class="hidden grid grid-cols-6 gap-6">
                            <div class="col-span-6 mb-4">
                                <x-fieldset title="图片审核" faq="设置上传是否需要应用第三方审查，违规的图片会被标记为不健康的图片，或直接被删除。">
                                    <x-switch id="configs[is_enable_review]" name="configs[is_enable_review]" value="1"></x-switch>
                                </x-fieldset>
                            </div>
                            <div class="col-span-6 mb-4">
                                <x-fieldset title="审核动作">
                                    <x-fieldset-radio id="configs[scanned_action]_mark" name="configs[scanned_action]" value="mark" checked>标记为不健康</x-fieldset-radio>
                                    <x-fieldset-radio id="configs[scanned_action]_delete" name="configs[scanned_action]" value="delete">直接删除</x-fieldset-radio>
                                </x-fieldset>
                            </div>
                            <div class="col-span-6 mb-4">
                                <x-fieldset title="审核驱动">
                                    <x-fieldset-radio id="configs[scan_configs][driver]" name="configs[scan_configs][driver]" data-select="scan" value="aliyun" checked>阿里云</x-fieldset-radio>
                                </x-fieldset>
                            </div>
                            <div class="hidden mb-4" data-scan-driver="aliyun">
                                <div class="col-span-6 sm:col-span-3 mb-4">
                                    <label for="configs[scan_configs][drivers][aliyun][access_key_id]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>AccessKeyId</label>
                                    <input type="text" name="configs[scan_configs][drivers][aliyun][access_key_id]" id="configs[scan_configs][drivers][aliyun][access_key_id]" autocomplete="access_key_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入 AccessKeyId">
                                </div>
                                <div class="col-span-6 sm:col-span-3 mb-4">
                                    <label for="configs[scan_configs][drivers][aliyun][access_key_secret]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>AccessKeySecret</label>
                                    <input type="text" name="configs[scan_configs][drivers][aliyun][access_key_secret]" id="configs[scan_configs][drivers][aliyun][access_key_secret]" autocomplete="access_key_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入 AccessKeySecret">
                                </div>
                                <div class="col-span-6 sm:col-span-3 mb-4">
                                    <label for="configs[scan_configs][drivers][aliyun][biz_type]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>场景名称</label>
                                    <input type="text" name="configs[scan_configs][drivers][aliyun][biz_type]" id="configs[scan_configs][drivers][aliyun][biz_type]" autocomplete="biz_type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入业务场景名称">
                                </div>
                                <div class="col-span-6 sm:col-span-3 mb-4">
                                    <label for="configs[scan_configs][drivers][aliyun][region_id]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>地域节点</label>
                                    <input type="text" name="configs[scan_configs][drivers][aliyun][region_id]" id="configs[scan_configs][drivers][aliyun][region_id]" autocomplete="region_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入地域节点，例如：cn-shanghai">
                                </div>
                                <div class="col-span-6 sm:col-span-3 mb-4">
                                    <x-fieldset title="场景">
                                        @foreach($scanAliyunScenes as $key => $scene)
                                            <x-fieldset-checkbox name="configs[scan_configs][drivers][aliyun][scenes][]" value="{{ $key }}">{{ $scene }}</x-fieldset-checkbox>
                                        @endforeach
                                    </x-fieldset>
                                </div>
                            </div>
                        </div>

                        <div data-tab="protection" class="hidden grid grid-cols-6 gap-6">
                            <div class="col-span-6 mb-4">
                                <x-fieldset title="原图保护" faq="设置该角色组下的用户上传的图片是否应用原图保护功能，开启后图片<b>不返回直链</b>">
                                    <x-switch id="configs[is_enable_original_protection]" name="configs[is_enable_original_protection]" value="1"></x-switch>
                                </x-fieldset>
                            </div>

                            <div class="col-span-6 mb-4">
                                <label for="cache_ttl" class="block text-sm font-medium text-gray-700">图片缓存时间(秒)</label>
                                <input type="number" name="configs[cache_ttl]" id="cache_ttl" autocomplete="cache_ttl" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入受保护图片的缓存时间，不填或填0表示不缓存">
                            </div>
                        </div>

                        <div data-tab="watermark" class="hidden grid grid-cols-6 gap-6">
                            <p class="mb-3 text-red-600 text-sm"><i class="fas fa-exclamation"></i> 开启水印功能前请注意考虑图片版权问题。</p>
                            <div class="col-span-6 mb-4">
                                <x-fieldset title="开启水印" faq="请注意，水印功能仅在开启了「原图保护」功能的情况下生效。">
                                    <x-switch id="configs[is_enable_watermark]" name="configs[is_enable_watermark]" value="1"></x-switch>
                                </x-fieldset>
                                <div class="col-span-6 mt-4 mb-4">
                                    <x-fieldset title="水印类型">
                                        <x-fieldset-radio id="configs[watermark_configs][driver]_font" name="configs[watermark_configs][driver]" data-select="watermark" value="font" checked>文字水印</x-fieldset-radio>
                                        <x-fieldset-radio id="configs[watermark_configs][driver]_image" name="configs[watermark_configs][driver]" data-select="watermark" value="image">图片水印</x-fieldset-radio>
                                    </x-fieldset>
                                </div>
                                <div class="mb-4 hidden" data-watermark-driver="font">
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][driver][font][font]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>字体文件</label>
                                        <input type="text" name="configs[watermark_configs][driver][font][font]" id="configs[watermark_configs][driver][font][font]" autocomplete="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入字体文件路径，例如：fonts/lsky.ttf">
                                        <small class="text-yellow-500">请将下载的字体文件放置程序根目录的 storage/app/public 目录下</small>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][driver][image][position]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>水印位置</label>
                                        <select id="configs[watermark_configs][driver][image][position]" name="configs[watermark_configs][driver][image][position]" autocomplete="position" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            @foreach($positions as $key => $position)
                                                <option value="{{ $key }}">{{ $position }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][driver][font][text]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>水印文字</label>
                                        <input type="text" name="configs[watermark_configs][driver][font][text]" id="configs[watermark_configs][driver][font][text]" autocomplete="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入水印文字">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][driver][font][color]" class="block text-sm font-medium text-gray-700">字体颜色</label>
                                        <input type="text" name="configs[watermark_configs][driver][font][color]" id="configs[watermark_configs][driver][font][color]" autocomplete="color" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入字体颜色，例如：#ffffff">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][driver][font][size]" class="block text-sm font-medium text-gray-700">字体大小</label>
                                        <input type="number" name="configs[watermark_configs][driver][font][size]" id="configs[watermark_configs][driver][font][size]" autocomplete="size" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入字体大小，默认 14">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][driver][font][angle]" class="block text-sm font-medium text-gray-700">旋转角度</label>
                                        <input type="number" name="configs[watermark_configs][driver][font][angle]" id="configs[watermark_configs][driver][font][angle]" autocomplete="angle" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入旋转角度，默认 0">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][driver][font][x]" class="block text-sm font-medium text-gray-700">X轴偏移量</label>
                                        <input type="number" name="configs[watermark_configs][driver][font][x]" id="configs[watermark_configs][driver][font][x]" autocomplete="x" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="X轴偏移量">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][driver][font][y]" class="block text-sm font-medium text-gray-700">Y轴偏移量</label>
                                        <input type="number" name="configs[watermark_configs][driver][font][y]" id="configs[watermark_configs][driver][font][y]" autocomplete="y" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Y轴偏移量">
                                    </div>
                                </div>
                                <div class="mb-4 hidden" data-watermark-driver="image">
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][driver][image][image]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>水印图片</label>
                                        <input type="text" name="configs[watermark_configs][driver][image][image]" id="configs[watermark_configs][driver][image][image]" autocomplete="image" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入水印路径，例如：images/lsky.png">
                                        <small class="text-yellow-500">请将水印图片放置程序根目录的 storage/app/public 目录下</small>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][driver][image][position]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>水印位置</label>
                                        <select id="configs[watermark_configs][driver][image][position]" name="configs[watermark_configs][driver][image][position]" autocomplete="position" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            @foreach($positions as $key => $position)
                                                <option value="{{ $key }}">{{ $position }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][driver][image][width]" class="block text-sm font-medium text-gray-700">图片宽度</label>
                                        <input type="number" name="configs[watermark_configs][driver][image][width]" id="configs[watermark_configs][driver][image][width]" autocomplete="width" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入水印图片宽度">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][driver][image][height]" class="block text-sm font-medium text-gray-700">图片高度</label>
                                        <input type="number" name="configs[watermark_configs][driver][image][height]" id="configs[watermark_configs][driver][image][height]" autocomplete="height" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入水印图片高度">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][driver][image][opacity]" class="block text-sm font-medium text-gray-700">不透明度</label>
                                        <input type="number" name="configs[watermark_configs][driver][image][opacity]" id="configs[watermark_configs][driver][image][opacity]" autocomplete="opacity" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入不透明度，取值 0 - 100">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][driver][image][rotate]" class="block text-sm font-medium text-gray-700">旋转角度</label>
                                        <input type="number" name="configs[watermark_configs][driver][image][rotate]" id="configs[watermark_configs][driver][image][rotate]" autocomplete="rotate" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入旋转角度，默认 0，取值 0 - 100">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][driver][image][x]" class="block text-sm font-medium text-gray-700">X轴偏移量</label>
                                        <input type="number" name="configs[watermark_configs][driver][image][x]" id="configs[watermark_configs][driver][image][x]" autocomplete="x" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="X轴偏移量">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][driver][image][y]" class="block text-sm font-medium text-gray-700">Y轴偏移量</label>
                                        <input type="number" name="configs[watermark_configs][driver][image][y]" id="configs[watermark_configs][driver][image][y]" autocomplete="y" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Y轴偏移量">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-button type="button" class="bg-gray-500" onclick="history.go(-1)">取消</x-button>
                        <x-button>确认创建</x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            // tabs select
            $('[data-target]').click(function () {
                $('[data-tab]').hide();
                $('[data-target]').removeClass('bg-white').addClass('bg-gray-200');
                $(`[data-tab=${$(this).data('target')}]`).show();
                $(this).removeClass('bg-gray-200').addClass('bg-white');
            });

            // 设置选中驱动
            let setSelected = function () {
                $('[data-select]').each(function () {
                    $(`[data-${$(this).data('select')}-driver=${$(this).val()}]`)[this.checked ? 'show' : 'hide']();
                });
            };

            setSelected();

            $('[data-select]').click(function () {
                setSelected();
            });

            $('form').submit(function (e) {
                e.preventDefault();
                axios.post(this.action, $(this).serialize()).then(response => {
                    console.log(response.data);
                });
            });
        </script>
    @endpush

</x-app-layout>