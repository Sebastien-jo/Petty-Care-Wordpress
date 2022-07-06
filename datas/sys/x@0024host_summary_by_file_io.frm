TYPE=VIEW
query=select if(`performance_schema`.`events_waits_summary_by_host_by_event_name`.`HOST` is null,\'background\',`performance_schema`.`events_waits_summary_by_host_by_event_name`.`HOST`) AS `host`,sum(`performance_schema`.`events_waits_summary_by_host_by_event_name`.`COUNT_STAR`) AS `ios`,sum(`performance_schema`.`events_waits_summary_by_host_by_event_name`.`SUM_TIMER_WAIT`) AS `io_latency` from `performance_schema`.`events_waits_summary_by_host_by_event_name` where `performance_schema`.`events_waits_summary_by_host_by_event_name`.`EVENT_NAME` like \'wait/io/file/%\' group by if(`performance_schema`.`events_waits_summary_by_host_by_event_name`.`HOST` is null,\'background\',`performance_schema`.`events_waits_summary_by_host_by_event_name`.`HOST`) order by sum(`performance_schema`.`events_waits_summary_by_host_by_event_name`.`SUM_TIMER_WAIT`) desc
md5=901c381d3d98dbb46350e5bbae184d88
updatable=0
algorithm=2
definer_user=mariadb.sys
definer_host=localhost
suid=0
with_check_option=0
timestamp=2022-07-06 09:40:27
create-version=2
source=SELECT IF(host IS NULL, \'background\', host) AS host,\n       SUM(count_star) AS ios,\n       SUM(sum_timer_wait) AS io_latency\n  FROM performance_schema.events_waits_summary_by_host_by_event_name\n WHERE event_name LIKE \'wait/io/file/%\'\n GROUP BY IF(host IS NULL, \'background\', host)\n ORDER BY SUM(sum_timer_wait) DESC;
client_cs_name=utf8mb3
connection_cl_name=utf8mb3_general_ci
view_body_utf8=select if(`performance_schema`.`events_waits_summary_by_host_by_event_name`.`HOST` is null,\'background\',`performance_schema`.`events_waits_summary_by_host_by_event_name`.`HOST`) AS `host`,sum(`performance_schema`.`events_waits_summary_by_host_by_event_name`.`COUNT_STAR`) AS `ios`,sum(`performance_schema`.`events_waits_summary_by_host_by_event_name`.`SUM_TIMER_WAIT`) AS `io_latency` from `performance_schema`.`events_waits_summary_by_host_by_event_name` where `performance_schema`.`events_waits_summary_by_host_by_event_name`.`EVENT_NAME` like \'wait/io/file/%\' group by if(`performance_schema`.`events_waits_summary_by_host_by_event_name`.`HOST` is null,\'background\',`performance_schema`.`events_waits_summary_by_host_by_event_name`.`HOST`) order by sum(`performance_schema`.`events_waits_summary_by_host_by_event_name`.`SUM_TIMER_WAIT`) desc
mariadb-version=100604
