<script>
import MessaseChild1 from "./MessaseChild1.vue";
import MessaseChild2 from "./MessaseChild2.vue";
import MessaseChild3 from "./MessaseChild3.vue";

export default {
    components: {
        MessaseChild1,
        MessaseChild2,
        MessaseChild3,
    },
    mounted() {
        console.log("Component mounted.");
    },
    data() {
        return {
            currentTab: "MessaseChild1",
            tabs: ["MessaseChild1", "MessaseChild2", "MessaseChild3"],
        };
    },
};
</script>

<template>
    <div class="tabs">
        <div class="btns">
            <button
                v-for="tab in tabs"
                :key="tab"
                :class="['tab_btn', { active: currentTab === tab }]"
                @click="currentTab = tab"
            >
                {{ tab }}
            </button>
            <component :is="currentTab"></component>
        </div>
    </div>
</template>
