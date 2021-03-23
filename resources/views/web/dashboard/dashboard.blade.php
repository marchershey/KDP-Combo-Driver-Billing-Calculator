<div class="p-5 space-y-5">

    <div class="p-5">
        <x-site.logo class="h-8" withName />
    </div>

    <x-div.card class="bg-indigo-500 text-white rounded-lg">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-shadow">$431.79</h1>
            <span class="text-xs text-indigo-300">This week's estimated income</span>
        </div>

        <div class="flex divide-x text-center hidden">
            <div class="w-1/2">
                asdf
            </div>

            <div class="w-1/2">
                asdf
            </div>
        </div>
    </x-div.card>

    <x-div.card>

        <h1 class="font-semibold text-lg">Recent Invoices</h1>
        <div class="overflow-hidden -mx-5 -mb-5">
            <div class="overflow-x-auto mb-2">
                <table class="min-w-full divide-y divide-gray-200">
                    <tbody class="bg-white divide-y divide-gray-200" x-max="1">
                        <tr>
                            <td class="px-5 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                02/09/2021
                            </td>
                            <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">
                                Regional Paradigm Technician
                            </td>
                            <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">
                                jane.cooper@example.com
                            </td>
                            <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">
                                Admin
                            </td>
                            <td class="px-5 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </x-div.card>

    <x-div.card class="hidden">

        <form action="" class="space-y-5">

            <div class="space-y-1">
                <label class="block text-sm font-semibold text-gray-700">Date</label>
                <div>
                    <input wire:model="date" type="date" class="block p-1 w-1/2 border border-gray-300 rounded placeholder-gray-400 focus:ring-0 focus:border-gray-400 focus:shadow-xl focus:outline-none" placeholder="Date">
                </div>
                <p class="mt-2 text-xs text-gray-500" id="email-description">Enter the date when the day was completed</p>
            </div>

            <div class="space-y-1">
                <label class="block text-sm font-semibold text-gray-700">Total Cases Delivered</label>
                <div>
                    <input wire:model="caseCount" type="tel" class="block p-1 w-1/2 border border-gray-300 rounded placeholder-gray-400 focus:ring-0 focus:border-gray-400 focus:shadow-xl focus:outline-none" placeholder="0">
                </div>
                <p class="mt-2 text-xs text-gray-500" id="email-description">Enter the number of total cases delivered</p>
            </div>

            <div class="space-y-1">
                <label class="block text-sm font-semibold text-gray-700">Total Miles Driven</label>
                <div>
                    <input wire:model="miles" type="tel" class="block p-1 w-1/2 border border-gray-300 rounded placeholder-gray-400 focus:ring-0 focus:border-gray-400 focus:shadow-xl focus:outline-none" placeholder="0">
                </div>
                <p class="mt-2 text-xs text-gray-500" id="email-description">Enter the number of total miles driven</p>
            </div>

            <div class="space-y-1">
                <div class="flex justify-between items-center">
                    <label class="block text-sm font-semibold text-gray-700" for="">Total Hours Worked:</label>
                    <span>0 hours</span>
                </div>
                <div class="flex space-x-2">
                    <div class="">
                        <label for="clockInTime" class="sr-only">Clock In Time</label>
                        <div class="inline-flex text-sm border rounded-md shadow-lg p-1">
                            <select name="" id="" class="px-1 outline-none appearance-none bg-transparent">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="02">03</option>
                                <option value="02">04</option>
                                <option value="02">05</option>
                                <option value="02">06</option>
                                <option value="02">07</option>
                                <option value="02">08</option>
                                <option value="02">09</option>
                                <option value="02">10</option>
                                <option value="02">11</option>
                                <option value="02">12</option>
                            </select>
                            <span class="">:</span>
                            <select name="" id="" class="px-1 outline-none appearance-none bg-transparent">
                                <option value="00">00</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                                <option value="49">49</option>
                                <option value="50">50</option>
                                <option value="51">51</option>
                                <option value="52">52</option>
                                <option value="53">53</option>
                                <option value="54">54</option>
                                <option value="55">55</option>
                                <option value="56">56</option>
                                <option value="57">57</option>
                                <option value="58">58</option>
                                <option value="59">59</option>
                            </select>
                            <select name="" id="" class="px-1 outline-none appearance-none bg-transparent">
                                <option value="AM">AM</option>
                                <option value="PM">PM</option>
                            </select>
                        </div>
                    </div>
                    <div class="">
                        <label for="clockOutTime" class="sr-only">Clock Out Time</label>
                        <input id="clockOutTime" wire:model="clockOutTime" type="time" class="block py-1 w-full border-gray-300 rounded placeholder-gray-400 focus:ring-0 focus:border-gray-400 focus:shadow-xl" placeholder="0">
                    </div>
                </div>
                <p class="mt-2 text-xs text-gray-500" id="email-description">Enter your clock-in time and clock-out times</p>
            </div>

        </form>

    </x-div.card>
</div>
