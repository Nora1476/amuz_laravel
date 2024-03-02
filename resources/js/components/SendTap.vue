<script>
import SendMenu1 from "./component/SendMenu1.vue";
import SendMenu2 from "./component/SendMenu2.vue";
import SendMenu3 from "./component/SendMenu3.vue";

export default {
    components: {
        SendMenu1,
        SendMenu2,
        SendMenu3,
    },
    mounted() {
        console.log("Component mounted.");
    },
    data() {
        return {
            currentTab: "문자메세지",
            tabs: [
                { name: "문자메세지", component: SendMenu1 },
                { name: "알림톡 (카카오)", component: SendMenu2 },
                { name: "친구톡 (카카오)", component: SendMenu3 },
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
    <div class="massage_tabs">
        <button
            v-for="(tab, index) in tabs"
            :key="index"
            @click="currentTab = tab.name"
            :class="{
                tab: true,
                active: currentTab === tab.name,
            }"
        >
            {{ tab.name }}
        </button>
    </div>

    <div class="tab-content">
        <component :is="currentTabComponent"></component>
    </div>
</template>
