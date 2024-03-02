<script>
import MsgMenu1 from "./component/MsgMenu1.vue";
import MsgMenu2 from "./component/MsgMenu2.vue";
import MsgMenu3 from "./component/MsgMenu3.vue";
import MsgMenu4 from "./component/MsgMenu4.vue";

export default {
    components: {
        MsgMenu1,
        MsgMenu2,
        MsgMenu3,
        MsgMenu4,
    },
    mounted() {
        console.log("Component mounted.");
    },
    data() {
        return {
            currentTab: "메세지 전송",
            tabs: [
                { name: "메세지 전송", component: MsgMenu1 },
                { name: "발신번호 관리", component: MsgMenu2 },
                { name: "주소록 관리", component: MsgMenu3 },
                { name: "발송 결과", component: MsgMenu4 },
            ],
        };
    },
    computed: {
        currentTabComponent() {
            const tab = this.tabs.find((tab) => tab.name === this.currentTab);
            return tab ? tab.component : null;
        },
    },
};
</script>

<template>
    <div class="sub_nav">
        <ul>
            <li
                v-for="(tab, index) in tabs"
                :key="index"
                @click="currentTab = tab.name"
                :class="{
                    'sub_nav-menu': true,
                    active: currentTab === tab.name,
                }"
            >
                {{ tab.name }}
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <component :is="currentTabComponent"></component>
    </div>
</template>
