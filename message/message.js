    /* 点赞、踩的按钮设计 */
    Vue.component('like',{
        template:'<button :class="{liked:liked}" @click="toggle_like()">👍{{like_count}}</button>',
        data:function(){
            return{
                like_count:10,
                liked:false,
            }
        },
        methods:{
            toggle_like:function(){
                if(!this.liked)
                this.like_count++;
                else
                this.like_count--;
    
                this.liked = !this.liked;
            }
        }
    
    })
    
    Vue.component('dislike',{
        template:'<button :class="{disliked:disliked}" @click="toggle_dislike()">👎{{dislike_count}}</button>',
        data:function(){
            return{
                dislike_count:0,
                disliked:false,
            }
        },
        methods:{
            toggle_dislike:function(){
                if(!this.disliked)
                this.dislike_count++;
                else
                this.dislike_count--;
    
                this.disliked = !this.disliked;
            }
        }
    })

new Vue({
    el:'#app'
})