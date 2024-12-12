<script setup>
import TextInput from "@/Components/TextInput.vue";
import UserListItem from "@/Components/app/UserListItem.vue";
import {ref} from "vue";

const searchKeyword = ref('')

const props = defineProps({
    users: Array
})

const localUser = ref([...props.users])

function searchFollowings() {
    axios.get(route('search-in-followings', encodeURIComponent(searchKeyword.value)))
        .then(res => {
            localUser.value = res.data
        })
        .catch(err => {
            console.log(err)
        })
}

</script>

<template>
    <TextInput v-model="searchKeyword" placeholder="Type to search" class="w-full mt-3"
               @keyup.enter="searchFollowings"/>
    <div class="mt-3 h-[200px] lg:flex-1 overflow-auto">
        <div v-if="false" class="text-gray-400 text-center p-3 dark:text-gray-100">
            You don't have friends yet.
        </div>
        <div v-else>
            <UserListItem v-for="user of localUser"
                          :user="user"
                          :key="user.id"
                          class="rounded-lg mb-2"/>
        </div>
    </div>
</template>

<style scoped>

</style>
