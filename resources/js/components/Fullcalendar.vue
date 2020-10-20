<script>
import FullCalendar from '@fullcalendar/vue'
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction'

export default {
  components: {
    FullCalendar // make the <FullCalendar> tag available
  },
  data() {
    return {
      _calendarOptions: {
        plugins: [dayGridPlugin,interactionPlugin],
        initialView: 'dayGridMonth'
      },
      get calendarOptions_1() {
        return this._calendarOptions
      },
      set calendarOptions_1(value) {
        this._calendarOptions=value
      },
      get calendarOptions() {
        return this._calendarOptions
      },
      set calendarOptions(value) {
        this._calendarOptions=value
      },
    }
  }
}
</script>
<template>
  <FullCalendar :options="calendarOptions" />
</template>